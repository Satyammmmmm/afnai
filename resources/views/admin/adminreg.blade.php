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

<input type="submit" id="submit" > 



</form>

@endsection
