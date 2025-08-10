@extends('layouts.app')

@section('title', 'Contact - Online Store')
@section('subtitle', 'Contact Us')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h3 class="mb-4">Contact Information</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Email:</strong> {{ $email }}</li>
                <li class="list-group-item"><strong>Address:</strong> {{ $address }}</li>
                <li class="list-group-item"><strong>Phone:</strong> {{ $phone }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
