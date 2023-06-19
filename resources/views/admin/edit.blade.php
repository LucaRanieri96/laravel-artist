@extends('layout.app')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <strong>{{ $error }}</strong>
            </div>
        @endforeach
    @endif

    <div class="container text-light">
        <form action="{{ route('artists.update', $artist->id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="artista" class="form-label">Artista</label>
                <input type="text" name="artista" id="artista"
                    class="form-control @error('artista') is-invalid @enderror"
                    value="{{ old('artist', $artist->artista) }}">

                @error('artista')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="nazionalita" class="form-label">nazionalita</label>
                <input type="text" name="nazionalita" id="nazionalita"
                    class="form-control @error('nazionalita') is-invalid @enderror"
                    value="{{ old('nazionalita', $artist->nazionalita) }}" placeholder="Project nazionalita">

                @error('nazionalita')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                    value="{{ old('description') }}" placeholder="Artista description"></textarea>

                @error('description')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="img_url" class="form-label">Immagine</label>
                <input type="text" name="img_url" id="img_url"
                    class="form-control @error('img_url') is-invalid @enderror" value="{{ old('img_url', $artist->img_url) }}"
                    placeholder="Artista img_url">

                @error('img_url')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="prossimo_concerto" class="form-label">prossimo_concerto</label>
                <input type="date" name="prossimo_concerto" id="prossimo_concerto"
                    class="form-control @error('prossimo_concerto') is-invalid @enderror"
                    value="{{ old('prossimo_concerto', $artist->prossimo_concerto) }}"
                    placeholder="Project prossimo_concerto">

                @error('prossimo_concerto')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="ultimo_album" class="form-label">ultimo_album</label>
                <input type="text" name="ultimo_album" id="ultimo_album"
                    class="form-control @error('ultimo_album') is-invalid @enderror"
                    value="{{ old('ultimo_album', $artist->ultimo_album) }}" placeholder="Project ultimo_album">

                @error('ultimo_album')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="ultimo_singolo" class="form-label">ultimo_singolo</label>
                <input type="text" name="ultimo_singolo" id="ultimo_singolo"
                    class="form-control @error('ultimo_singolo') is-invalid @enderror"
                    value="{{ old('ultimo_singolo', $artist->ultimo_singolo) }}" placeholder="Project ultimo_singolo">

                @error('ultimo_singolo')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="label_id" class="form-label">Labels</label>
                <select class="form-select" name="label_id" id="label_id">
                    <option value="">Select a new label</option>
                    @foreach ($labels as $label)
                        <option value="{{ $label?->id }}"
                            {{ $label?->id == old('label_id', $artist->label?->id) ? 'selected' : '' }}>{{ $label?->name }}
                        </option>
                    @endforeach
                </select>

            </div>

            <button type="submit" class="btn btn-primary">Edit project</button>
            <button type="reset" class="btn btn-danger">Reset fields</button>
        </form>
    @endsection
