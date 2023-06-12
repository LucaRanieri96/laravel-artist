@extends('layout.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary mb-3" href="" role="button">New Label</a>

        @if (session('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif

        <div class="table-responsive rounded mb-3">
            <table class="table table-striped-columns table-dark">
                <thead>
                    <tr class="align-middle">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Links</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($labels as $label)
                        <tr>
                            <td scope="row" class="">{{ $label->id }}</td>
                            <td scope="row" class=""><span class="badge bg-danger">{{ $label->name }}</span></td>
                            <td scope="row" class="text-success">{{ $label->artists->count() }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text_custom_green" scope="row">No label found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
        <div class="mt-2">
            <a class="btn btn-outline-light" href="{{ route('artists.index') }}" role="button">Back</a>
        </div>
    </div>
@endsection
