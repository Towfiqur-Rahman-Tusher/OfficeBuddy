@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="fw-bold mb-4">Choose Your Required Services</h1>

    <p class="text-muted fs-5 mb-4">
        Select the OfficeBuddy services that suit your business needs. You can choose one or more options below and proceed to subscribe.
    </p>

    <form action="{{ route('subscriptions.choose') }}" method="POST">
        @csrf

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <label class="service-card d-block p-4 border rounded cursor-pointer" for="service_payroll">
                    <input type="checkbox" id="service_payroll" name="services[]" value="automated_payroll" class="d-none" />
                    <h5 class="mb-3">Automated Payroll System</h5>
                    <p class="text-muted">
                        Fully automated payroll calculations, payslips, tax deductions, and compliance made easy.
                    </p>
                </label>
            </div>
            <div class="col-md-4 mb-4">
                <label class="service-card d-block p-4 border rounded cursor-pointer" for="service_employee_mgmt">
                    <input type="checkbox" id="service_employee_mgmt" name="services[]" value="employee_management" class="d-none" />
                    <h5 class="mb-3">Employee Management System</h5>
                    <p class="text-muted">
                        Manage employee records, attendance, leaves, and performance all in one place.
                    </p>
                </label>
            </div>
            <div class="col-md-4 mb-4">
                <label class="service-card d-block p-4 border rounded cursor-pointer" for="service_office_mgmt">
                    <input type="checkbox" id="service_office_mgmt" name="services[]" value="office_management" class="d-none" />
                    <h5 class="mb-3">Office Management with Automated Payroll</h5>
                    <p class="text-muted">
                        Complete office management platform including projects, communication, and payroll automation.
                    </p>
                </label>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-dark btn-get-started px-5">
                Proceed to Subscribe
            </button>
        </div>
    </form>
</div>
@endsection
