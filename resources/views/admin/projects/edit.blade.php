@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="m-4">Modifica il tuo progetto: {{ $project->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="title-container">
                        <label for="title">Titolo del progetto</label>
                        <input
                            class="form-control @error('title')
                        is-invalid
                        @enderror""
                            type="text" name="title" id="title" value="{{ old('title', $project->title) }}"">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="text-container">
                        <label for="proj_description">Descrizione del progetto</label>
                        <textarea name="proj_description" id="proj_description" rows="10"
                            class="form-control @error('proj_description')
                            is-invalid
                            @enderror">{{ old('proj_description', $project->proj_description) }}</textarea>
                        @error('proj_description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Invia</button>
                </form>
            </div>
        </div>
    @endsection
