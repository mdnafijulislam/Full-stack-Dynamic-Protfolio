@extends('layouts.master')

@section('title','Portfolio - My Portfolio')

@section('content')
<h1 class="mb-4">Portfolio</h1>
<div class="row">
  @foreach($projects as $project)
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        @if($project->image)
          <img src="{{ asset('assets/images/'.$project->image) }}" class="card-img-top" alt="{{ $project->title }}">
        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $project->title }}</h5>
          <p class="card-text">{{ \Illuminate\Support\Str::limit($project->description, 160) }}</p>
        </div>
        <div class="card-footer">
          @if($project->link)
            <a href="{{ $project->link }}" target="_blank" class="btn btn-outline-primary btn-sm">Live</a>
          @endif
          <span class="ms-2 text-muted">{{ $project->category }}</span>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
