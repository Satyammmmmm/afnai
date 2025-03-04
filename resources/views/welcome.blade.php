@extends('layouts.navs')
@section('title', 'Welcome')
@section('content')

<section class="hero_section w_100 h_90vh padding_s15 flex gap_s">
    <div class="hero_content w_100 h_100 flex_c flex_cl gap_s">
        <h1 class="secondary_font">GADI CHADNE HAINA TA?</h1>
        <h3 class="primary_font gray_cl">Become a Captain, Rider or Tuktuk Chalak on the highest earning platform of Nepal!</h3>
        
        <div class="button_holder w_100 flex_cl gap_xs">
        <button class="primary_button w_100"><a href="/rider_registration"><h2 class="black_cl primary_font">Become a Rider <i class="ri-arrow-right-line"></i></h2></a></button>
        <button class="primary_button secondary_button w_100"><a href="/rider_registration"><h2 class="black_cl primary_font">Book a Ride <i class="ri-navigation-fill"></i></h2></a></button>
        </div>
    </div>
    <div class="image_holder w_100 h_100 flex_c">
        <img src="https://images.pexels.com/photos/9519970/pexels-photo-9519970.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class=" w_100">
    </div>
    </section>
<!-- <a href="/rider_registration">Become a Rider</a>
<a href="/user_signup">Book a Ride</a> -->
@endsection