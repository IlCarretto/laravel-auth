@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="m-4">I tuoi progetti</h2>
        <div class="add-project d-flex justify-content-end">
            <a href="{{ route('admin.projects.create') }}">Aggiungi progetto</a>
        </div>
        {{-- @if (session('message'))
        @endif --}}
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data di creazione</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->created_at }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('admin.projects.show', $project->slug) }}">
                                        Details
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
