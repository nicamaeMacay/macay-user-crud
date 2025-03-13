@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Details</h1>
        
        <div class="card">
            <div class="card-header">
                User: {{ $user->name }}
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <a href="{{ route('users.index') }}" class="btn btn-primary">Back to Users List</a>
            </div>
        </div>
    </div>
@endsection
