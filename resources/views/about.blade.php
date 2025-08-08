@extends('layouts.app')

@section('content')
<div class="container py-5 position-relative">
    <h1 class="fw-bold mb-4">About OfficeBuddy</h1>
    <p class="text-muted fs-5">
        OfficeBuddy is your all-in-one solution for efficient office management and automated payroll systems. 
        Our mission is to simplify operations for small and medium-sized businesses by providing smart, reliable, and easy-to-use software tools.
    </p>

    <h3 class="mt-5 mb-3">Our Mission</h3>
    <p class="fs-5">
        To empower offices with smart tools that automate routine tasks, reduce paperwork, and improve overall productivity. 
        We strive to make office management seamless so teams can focus on what truly matters — growing their business.
    </p>

    <h3 class="mt-5 mb-3">Our Vision</h3>
    <p class="fs-5">
        To become the leading office management platform across industries by delivering scalable, secure, and user-friendly software solutions that evolve with the needs of modern workplaces.
    </p>

    <h3 class="mt-5 mb-3">Why Choose OfficeBuddy?</h3>
    <ul class="list-group list-group-flush fs-5 mb-4">
        <li class="list-group-item">Comprehensive management of payroll, employees, projects, and communication</li>
        <li class="list-group-item">Automated calculations and reports to minimize errors and save time</li>
        <li class="list-group-item">Intuitive interface designed for users of all technical levels</li>
        <li class="list-group-item">Robust security features to protect your sensitive data</li>
        <li class="list-group-item">Dedicated customer support and continuous software updates</li>
    </ul>

    <a href="/" class="btn btn-dark btn-get-started">Back to Home</a>
<!-- Next button -->
     <a href="/services" class="btn btn-dark btn-get-started position-absoulute">
    Next <i class="fa-solid fa-arrow-right ms-2"></i>
</a>


</div>


@endsection
