<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >@yield('title','')</title>
    <link rel="stylesheet" href="{{ asset('./resources/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./resources/css/util.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css">
</head>
<body>
    <div class="main_container w_100">
        <nav class="navbar w_100 h_10vh padding_s15 flex justify_sb align_c">
            <h2 class="primary_font"><span style="color: var(--primary_color);">SASTA</span> PATHAO</h2>

            <div class="nav_links flex gap_s align_c">
                <a href="/" class="primary_font primary_color "><h3 class="font_w400 link_hover">Home</h3></a>
                <a href="#" class="primary_font primary_color "><h3 class="font_w400 link_hover">Services</h3></a>
                <a href="/rider_reg" class="primary_font primary_color "><h3 class="font_w400 link_hover">Become a Rider</h3></a>
                <a href="#" class="primary_font primary_color "><h3 class="font_w400 link_hover">Contact</h3></a>
                <a href="/user_dashboard" class="primary_link_button"><h3 class="font_w400 white_cl secondary_font">Book a Ride</h3></a>
            </div>
        </nav>
        <main class="main w_100">
            @yield('content')
        </main>
    </div>
</body>
</html>