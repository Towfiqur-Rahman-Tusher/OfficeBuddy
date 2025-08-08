@extends('layouts.app')

@section('content')
<h1 class="fw-bold">OfficeBuddy </h1>
<h4>Smarter office,Happier team..</h4>

<div class="intro">
<p class="text">
    A complete office management system designed to simplify your workflow and centralize all your essential operations in one place. 
    From automated payroll to employee management, OfficeBuddy keeps your office running efficiently and effortlessly. 
    Monitor attendance, track performance, manage projects, and generate reports with just a few clicks. 
    With a clean interface and powerful automation tools, OfficeBuddy reduces manual tasks, minimizes errors, 
    and helps your team focus on what truly matters — growing your business.
</p>
</div>


<h2 class="fw-bold">Why OfficeBuddy?</h2>
<div class="row text-center my-4">
    <div class="col-md-4 mb-3">
        <div class="feature-card p-3 h-100 d-flex flex-column">
            <img src="{{ asset('images/auto.png') }}" class="img-fluid rounded mb-2" alt="Automated Payroll">
            <h5>Automated Payroll</h5>
            <p class="text-muted flex-grow-1">
                Calculate salaries, deductions, and bonuses automatically, ensuring accuracy and saving valuable time every month.
            </p>
            <a href="#" class="btn btn-outline-dark mt-auto">Learn More</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="feature-card p-3 h-100 d-flex flex-column">
            <img src="{{ asset('images/EMS1.png') }}" class="img-fluid rounded mb-2" alt="Employee Management">
            <h5>Employee Management</h5>
            <p class="text-muted flex-grow-1">
                Maintain detailed employee records, track attendance, manage leaves, and improve HR operations seamlessly.
            </p>
            <a href="#" class="btn btn-outline-dark mt-auto">Learn More</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="feature-card p-3 h-100 d-flex flex-column">
            <img src="{{ asset('images/office.png') }}" class="img-fluid rounded mb-2" alt="Office Operations">
            <h5>Office Operations</h5>
            <p class="text-muted flex-grow-1">
                Manage projects, schedules, and internal communication in one centralized platform, boosting productivity.
            </p>
            <a href="#" class="btn btn-outline-dark mt-auto">Learn More</a>
        </div>
    </div>
</div>


<div class="text-center my-5">
    <a href="/about" class="btn btn-dark btn-get-started">
        Get Started
    </a>
</div>

@endsection
