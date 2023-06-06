@extends('layout.app')

@section('content')
    <h1 class="text-center txt_shadow txt_shadow text-light mb-5">Concerti 2023</h1>
    <div class="container">
        <a href="{{ route('artists.create') }}">Add a new Concert</a>
        <table class="table table-striped-columns table-dark">
            <thead>
                <tr>
                    <th scope="col">artista</th>
                    <th scope="col">nazionalita</th>
                    <th scope="col">prossimo concerto</th>
                    <th scope="col">ultimo album</th>
                    <th scope="col">ultimo singolo</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($artists as $artist)
                    <tr>
                        <td>{{ $artist->artista }}</td>
                        <td>{{ $artist->nazionalita }}</td>
                        <td>{{ $artist->prossimo_concerto }}</td>
                        <td>{{ $artist->ultimo_album }}</td>
                        <td>{{ $artist->ultimo_singolo }}</td>
                        <td>
                            <a href="{{ route('artists.edit', $artist->id) }}">Edit</a>
                            <a href="{{ route('artists.show', $artist->id) }}">Show</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-bs-target="#modal-{{ $artist->id }}">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <div class="modal fade" id="modal-{{ $artist->id }}" tabindex="-1" data-bs-backdrop="static"
                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{ $artist->id }}"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitle-{{ $artist->id }}">Deleting artist:
                                        "{{ $artist->artista }}"</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('artists.destroy', $artist->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Confirm</button>
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