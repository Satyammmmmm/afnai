@extends('layouts.navs')
@section('title', 'User_Registration')

@section('content')
@if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('user.register') }}" method="POST">
        @csrf

        <label>Full Name</label>
        <input type="text" name="fullname" required>
        <br>

        <label>Phone</label>
        <input type="text" name="phone" required>
        <br>

        <label>Citizenship Number</label>
        <input type="text" name="citizenship_number" required>
        <br>

        <label>Password</label>
        <input type="password" name="password" required>
        <br>

        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" required>
        <br>

        <button type="submit">Register</button>
    </form>

@endsection