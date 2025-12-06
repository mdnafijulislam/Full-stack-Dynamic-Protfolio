@extends('layouts.master')

@section('title','Portfolio - My Portfolio')

@section('content')

<h1 class="mb-4">My Projects</h1>

<div class="row g-4">

@foreach($projects as $project)
    <div class="col-md-4">
        <div class="card shadow-sm project-card" data-bs-toggle="modal" data-bs-target="#projectModal{{ $project->id }}">
            
            <div class="project-image-wrapper">
                <img src="{{ asset('assets/images/'.$project->image) }}" class="card-img-top project-img" alt="{{ $project->title }}">
            </div>

            <div class="card-body">
                <h5>{{ $project->title }}</h5>
                <p class="text-muted small">{{ $project->category }}</p>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="projectModal{{ $project->id }}" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">{{ $project->title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <img src="{{ asset('assets/images/'.$project->image) }}" class="img-fluid rounded mb-3" alt="">
                    <p>{{ $project->description }}</p>

                    @if($project->link)
                    <a href="{{ $project->link }}" class="btn btn-primary" target="_blank">View Live</a>
                    @endif
                </div>

            </div>
        </div>
    </div>

@endforeach

</div>

@endsection
