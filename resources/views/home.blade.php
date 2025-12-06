@extends('layouts.master')

@section('title','Home - My Portfolio')

@section('content')
<div class="row align-items-center mb-5">
  <div class="col-md-4 text-center">
    <img src="{{ asset('assets/images/avatar.jpg') }}" alt="avatar" class="img-fluid rounded-circle" style="max-width:180px;">
  </div>
  <div class="col-md-8">
    <h1>Hi, I'm <strong>Md. Nafijul Islam</strong></h1>
    <p class="lead">I build modern and responsive websites using HTML, CSS, JS and Java (SpringBoot).</p>
    <a href="#portfolio" class="btn btn-primary">See my work</a>
  </div>
</div>

<section class="mb-5">
  <h2 class="mb-4">Services</h2>
  <div class="row">
    @foreach($services as $service)
      <div class="col-md-6 mb-3">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">
              {!! $service->icon ? "<i class='{$service->icon}'></i> " : "" !!}
              {{ $service->title }}
            </h5>
            <p class="card-text">{{ $service->description }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>

<section class="mb-5">
  <h2 class="mb-4">Skills</h2>
  <div class="row">
    @foreach($skills as $skill)
      <div class="col-md-6 mb-3">
        <div>
          <strong>{{ $skill->name }}</strong> <span class="float-end">{{ $skill->percentage }}%</span>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: {{ $skill->percentage }}%;" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    @endforeach
  </div>
</section>

<section id="portfolio" class="mb-5">
  <h2 class="mb-4">Portfolio</h2>
  <div class="row">
    @foreach($projects as $project)
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          @if($project->image)
            <img src="{{ asset('assets/images/'.$project->image) }}" class="card-img-top" alt="{{ $project->title }}">
          @endif
          <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text">{{ \Illuminate\Support\Str::limit($project->description, 120) }}</p>
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
</section>
@endsection
