@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{ $project->title }}</h1>
        <div class="mt-3">
            <h5>{{ $project->created_at }}</h5>
        </div>
        <p class="mt-3">{{ $project->proj_description }}</p>
    </div>
@endsection
