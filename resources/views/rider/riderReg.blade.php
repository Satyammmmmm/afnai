@extends('layouts.navs')
@section('title', 'Rider_Registration')

@section('content')
<form action="{{ route('rider.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <h2>RIDER REGISTRATION FORM</h2>

    <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName" required>
        <br>

        <label>Vehicle Type</label>
        <input type="radio" id="bike" name="vehicleType" value="Bike" required>
        <label for="bike">Bike</label>

        <input type="radio" id="car" name="vehicleType" value="Car">
        <label for="car">Car</label>
        <br>
        <label for="vehicleNumber">Vehicle Number</label>
        <input type="text" id="vehicleNumber" name="vehicleNumber" required>
        <br>


        <label for="vehicleRegistration">Vehicle Registration (Upload)</label>
        <input type="file" id="vehicleRegistration" name="vehicleRegistration" accept=".jpg, .png, .pdf" required>
        <br>

        <label for="driverLicense">Driver License (Upload)</label>
        <input type="file" id="driverLicense" name="driverLicense" accept=".jpg, .png, .pdf" required>
        <br>

        <label for="phoneNumber">Phone Number</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>
        <br>

        <label for="emailAddress">Email Address</label>
        <input type="email" id="emailAddress" name="emailAddress" required>
        <br>


        <label for="image">Profile Image</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        <br>
        <button type="submit">Submit</button>
</form>
@endsection