@extends('layouts.master')

@section('title', 'About Me')

@section('content')

<div class="p-4 bg-light rounded shadow-sm">

  <h2 class="mb-3">About Me</h2>

  <p>{{ $settings->about_text }}</p>

  <hr>

  <h3 class="mb-3">Education</h3>
  <ul>
    <li>BSc in Computer Science & Engineering</li>
    <li>HSC - Science GPA: 5.00</li>
    <li>SSC - Science GPA: 5.00</li>
    <li>CGPA: 3.29/4.00 (Up to 7th Semester)</li>
  </ul>

  <hr>
   <hr>

  <h3 class="mb-3">Hobbies</h3>
  <ul>
    <li>Traveling</li>
    <li>Reading</li>
    <li>Coding</li>
    <li>Photography</li>
    <li>Gaming</li>
  </ul>

  <hr>

  <h3 class="mb-3">Contact Information</h3>
  <p><strong>Address:</strong> Dhaka, Bangladesh</p>
  <p><strong>Email:</strong> nafijul@example.com</p>
  <p><strong>Phone:</strong> +8801517819957</p>

</div>

@endsection
