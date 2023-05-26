@extends('layout.app')
@section('content')


    <h1 class="text-center text-light mb-5">Artists</h1>
    <div class="container">
        <table class="table table-striped-columns table-dark">
            <thead>
                <tr>
                    <th scope="col">artista</th>
                    <th scope="col">nazionalita</th>
                    <th scope="col">prossimo_concerto</th>
                    <th scope="col">ultimo_album</th>
                    <th scope="col">ultimo_singolo</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($artists as $artist)
              <tr>
                <td>{{$artist->artista}}</td>
                <td>{{$artist->nazionalita}}</td>
                <td>{{$artist->prossimo_concerto}}</td>
                <td>{{$artist->ultimo_album}}</td>
                <td>{{$artist->ultimo_singolo}}</td>
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
