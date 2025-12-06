@extends('layouts.master')

@section('title', 'Contact Me')

@section('content')

<h1 class="mb-4">Contact Me</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('contact.submit') }}" method="POST" class="mt-4">
    @csrf

    <div class="mb-3">
        <label class="form-label">Name*</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Email*</label>
        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Subject</label>
        <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Message*</label>
        <textarea name="message" class="form-control" rows="5">{{ old('message') }}</textarea>
        @error('message') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button class="btn btn-primary">Send Message</button>
</form>

@endsection
