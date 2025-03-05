@extends('layouts.navs')
@section('title', 'User_Registration')

@section('content')
<section class="user_reg w_100 padding_s15 padding_vs flex justify_sb gap_s">
    <form action="{{ route('user.register') }}" method="POST" class="form_card w_100 h_100 flex_cl">
        @csrf
        <h2 class="primary_font mbottom_s">User Registration</h2>

        <!-- Display errors at the top -->
        @if($errors->any())
            <div class="error_popup" style="background-color: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                <ul>
                    @foreach($errors->all() as $error)
                        <h4 class="primary_font">{{ $error }}</h4>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="input_row w_100 h_fc flex justify_sb gap_xs primary_font mtop_s">
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 class="gray_cl">Full Name</h4>
                <input type="text" id="fullname" name="fullname" required placeholder="Enter Your Full Name" class="input_field" value="{{ old('fullname') }}">
            </div>
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 class="gray_cl">Phone Number</h4>
                <input type="text" id="phone" name="phone" required placeholder="Enter Your Contact Number" class="input_field" value="{{ old('phone') }}">
            </div>
        </div>

        <div class="input_row w_100 h_fc flex justify_sb gap_xs primary_font mtop_s">
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 class="gray_cl">CitizenShip Number</h4>
                <input type="text" id="citizenship_number" name="citizenship_number" required placeholder="Enter Your Citizenship Number" class="input_field" value="{{ old('citizenship_number') }}">
            </div>
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 class="gray_cl">Password</h4>
                <input type="password" id="password" name="password" required placeholder="Enter Your Password" class="input_field">
            </div>
        </div>

        <div class="input_row w_100 h_fc flex justify_sb gap_xs primary_font mtop_s">
            <div class="input_holder mtop_s w_100 flex_cl gap_xs">
                <h4 class="gray_cl">Confirm Password</h4>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm Your Password" class="input_field">
            </div>
        </div>

        <button type="submit" class="primary_button w_100 mtop_s text_ac">
            <h3 class="white_cl primary_font">Register</h3>
        </button>
    </form>

    <div class="image_holder_rider w_100 flex_c overflow_h position_r">
        <img src="https://images.pexels.com/photos/13711811/pexels-photo-13711811.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Bike" class="bike_png h_100 position_a">
    </div>
</section>
@endsection