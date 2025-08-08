@extends('layouts.app')

@section('content')
<h1 class="fw-bold">Contact Us</h1>
<p class="text">We'd love to hear from you. Send us a message and we'll get back to you shortly.</p>
<div class="formcontainer">
<form action="#" method="POST" class="mt-4">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea name="message" rows="5" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-dark btn-get-started">Send Message</button>
</form>
</div>


@endsection
