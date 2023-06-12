@extends('layout.app')

@section('content')
    <h1 class="text-center txt_shadow txt_shadow text-light mb-5">Concerti 2023</h1>
    <div class="container">
        <a class="btn btn-primary mb-4" href="{{ route('artists.create') }}">Add a new Concert</a>
        <table class="table table-striped-columns table-dark">
            <thead>
                <tr>
                    <th scope="col">artista</th>
                    <th scope="col">nazionalita</th>
                    <th scope="col">prossimo concerto</th>
                    <th scope="col">ultimo album</th>
                    <th scope="col">ultimo singolo</th>
                    <th scope="col">Label</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($artists as $artist)
                    <tr class="align-middle">
                        <td>{{ $artist->artista }}</td>
                        <td>{{ $artist->nazionalita }}</td>
                        <td>{{ $artist->prossimo_concerto }}</td>
                        <td>{{ $artist->ultimo_album }}</td>
                        <td>{{ $artist->ultimo_singolo }}</td>
                        <td><span class="badge bg-primary">{{ $artist->label->name ?? 'No Label' }}</span></td>
                        <td>
                            <a class="btn btn-info my-1" href="{{ route('artists.edit', $artist->id) }}">
                                
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a class="btn btn-success" href="{{ route('artists.show', $artist->id) }}">
                                <i class="fa-regular fa-eye fa-fw"></i>
                            </a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modal-{{ $artist->id }}">
                                <i class="fa-regular fa-trash-can fa-fw"></i>
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="modal-{{ $artist->id }}" tabindex="-1" data-bs-backdrop="static"
                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{ $artist->id }}"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark" id="modalTitle-{{ $artist->id }}">Attenzione!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-black">
                                    Sicuro di voler cancellare la repo?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                    <form action="{{ route('artists.destroy', $artist->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="col">
                        <p>Come back later!</p>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection