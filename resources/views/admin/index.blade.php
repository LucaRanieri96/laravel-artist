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
                            <a href="">Delete</a>
                            <a href="{{ route('artists.show', $artist->id) }}">Show</a>
                        </td>
                    </tr>
                @empty
                    <div class="col">
                        <p>Come back later!</p>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
