@extends('layouts.navs')
@section('title', 'Rider_Registration')

@section('content')
<section class="rider_registration w_100 h_fc padding_s15 padding_vs flex_c gap_ss">
    <form action="#" class="rider_reg w_100 h_100 flex_cl">
        <h2 class="primary_font mbottom_s">Rider Registration</h2>

        <div class="input_row w_100 h_fc flex justify_sb gap_xs primary_font mtop_s">
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 clas="gray_cl">Full Name</h4>
                <input type="text" id="fullName" name="fullName" required placeholder="Enter Your Full Name" class="input_field">
            </div>
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 clas="gray_cl">Vehicle Type</h4>
                <select type="text" id="fullName" name="fullName" required placeholder="Enter Your Full Name" class="input_field">
                    <option value="bike">Bike</option>
                    <option value="car">Car</option>
                </select>
            </div>
        </div>
        <div class="input_row w_100 h_fc flex justify_sb gap_xs primary_font mtop_s">
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 clas="gray_cl">Vehicle Number</h4>
                <input type="text" id="fullName" name="fullName" required placeholder="Enter Your Vehicle Number" class="input_field">
            </div>
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 clas="gray_cl">Phone Number</h4>
                <input type="number" id="fullName" name="fullName" required placeholder="Enter Your Contact Number" class="input_field">
            </div>
        </div>
        <div class="input_row w_100 h_fc flex justify_sb gap_xs primary_font mtop_s">
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 clas="gray_cl">Email Address</h4>
                <input type="email" id="fullName" name="fullName" required placeholder="Enter Your Email Address" class="input_field">
            </div>
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 clas="gray_cl">Profile Picture</h4>
                <input type="file" id="fullName" name="fullName" required placeholder="Enter Your Contact Number" class="input_field file_field">
            </div>
        </div>
        <div class="input_row w_100 h_fc flex justify_sb gap_xs primary_font mtop_s">
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 clas="gray_cl">Vehicle Registration</h4>
                <input type="file" id="fullName" name="fullName" required class="input_field file_field">
            </div>
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 clas="gray_cl">Driver License</h4>
                <input type="file" id="fullName" name="fullName" required class="input_field file_field">
            </div>
        </div>
        <button type="submit" class="primary_button w_100 mtop_s text_ac"><h3 class="black_cl primary_font">Submit</h3></button>
    </form>
    <div class="image_holder_rider w_100 h_100 flex_c">
        <img src="{{ asset('./resources/images/hero.png') }}" alt="Bike" class="bike_png w_100">
    </div>
</section>
<!-- <form action="{{ route('rider.store') }}" method="POST" enctype="multipart/form-data">
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
</form> -->
@endsection