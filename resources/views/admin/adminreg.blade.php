@extends('layouts.navs')

@section('title', 'adminregistration')
@section('content')

<h2>ADMIN PANEL</h2>
<form action="#">
<label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName" required>
        <br>
<label for="password">Password</label>
<input type="password" id="password" name="password" required>

<br>

<label for="role">Select Role</label>
    <select id="role" name="role" required>
        <option value="admin">Admin</option>
        <option value="superadmin">Super Admin</option>
    </select>
    <br>



    <input type="submit" id="submit" > 
</form>

@endsection
