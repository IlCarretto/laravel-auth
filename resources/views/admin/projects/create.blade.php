@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="m-4">Crea nuovo progetto</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="title-container">
                        <label for="title">Titolo del progetto</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    <div class="text-container">
                        <label for="proj_description">Descrizione del progetto</label>
                        <textarea name="proj_description" id="proj_description" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Invia</button>
                </form>
            </div>
        </div>
    </div>
@endsection
