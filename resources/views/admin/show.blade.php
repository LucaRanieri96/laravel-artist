@extends('layout.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
<div class="container">
    <div class="card overflow-hidden">
        <div class="card-header bg-primary text-light">
            <h2 class="mb-0">Artist resume</h2>
        </div>
        <div class="card-body bg-dark text-light">
            <h4>Artist name:
                <br>
                <span class="fw-normal">{{ $artist->artista }}</span>
            </h4>

            <h4>Nationality:
                <br>
                <span class="fw-normal">{{ $artist->nazionalita }}</span>
            </h4>

            <h4>Next Concert:
                <br>
                <span class="fw-normal">{{ $artist->prossimo_concerto }}</span>
            </h4>

            <h4>Last album:
                <br>
                <span class="fw-normal">{{ $artist->ultimo_album }}</span>
            </h4>

            <h4>Last Song:
                <br>
                <span class="fw-normal">{{ $artist->ultimo_singolo }}</span>
            </h4>
        </div>
    </div>

</div>
@endsection
