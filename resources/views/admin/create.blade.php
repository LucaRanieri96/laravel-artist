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
        <form action="{{ route('artists.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="artista" class="form-label">Artista</label>
                <input type="text" name="artista" id="artista"
                    class="form-control @error('artista') is-invalid @enderror" value="{{ old('artista') }}"
                    placeholder="Project artista">

                @error('artista')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="nazionalita" class="form-label">nazionalita</label>
                <input type="text" name="nazionalita" id="nazionalita"
                    class="form-control @error('nazionalita') is-invalid @enderror" value="{{ old('nazionalita') }}"
                    placeholder="Project nazionalita">

                @error('nazionalita')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="prossimo_concerto" class="form-label">prossimo_concerto</label>
                <input type="date" name="prossimo_concerto" id="prossimo_concerto"
                    class="form-control @error('prossimo_concerto') is-invalid @enderror"
                    value="{{ old('prossimo_concerto') }}" placeholder="Project prossimo_concerto">

                @error('prossimo_concerto')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="ultimo_album" class="form-label">ultimo_album</label>
                <input type="text" name="ultimo_album" id="ultimo_album"
                    class="form-control @error('ultimo_album') is-invalid @enderror" value="{{ old('ultimo_album') }}"
                    placeholder="Project ultimo_album">

                @error('ultimo_album')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="ultimo_singolo" class="form-label">ultimo_singolo</label>
                <input type="text" name="ultimo_singolo" id="ultimo_singolo"
                    class="form-control @error('ultimo_singolo') is-invalid @enderror" value="{{ old('ultimo_singolo') }}"
                    placeholder="Project ultimo_singolo">

                @error('ultimo_singolo')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="label_id" class="form-label">labels</label>
                <select class="form-select @error('label') is-invalid @enderror" name="label_id" id="label_id">
                    <option value="">Select a label</option>
                    @foreach ($labels as $label)
                        <option value="{{ $label->id }}" {{ $label->id == old('label_id', '') ? 'selected' : '' }}>
                            {{ $label->name }}</option>
                    @endforeach
                </select>

                @error('label')
                    <small class="text-danger">Please, fill the field correctly</small>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary">Insert project</button>
            <button type="reset" class="btn btn-danger">Reset fields</button>
        </form>
    </div>
@endsection
