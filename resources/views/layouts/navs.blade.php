<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yield('title', '')</title>
    <link rel="stylesheet" href="{{ asset('./resources/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./resources/css/util.css') }}">
</head>
<body>
    <div class="main_container w_100">
        <nav class="navbar w_100 h_10vh padding_s15 flex justify_sb align_c">
            <h1 class="primary_font">SASTA PATHAO</h1>

            <div class="nav_links flex gap_s">
                <a href="" class="primary_font primary_color"><h3 class="font_w400">Services</h3></a>
                <a href="" class="primary_font primary_color"><h3 class="font_w400">Become a Rider</h3></a>
                <a href="" class="primary_font primary_color"><h3 class="font_w400">Contact</h3></a>
            </div>
        </nav>
        <main class="main w_100">
            @yield('content')
        </main>
    </div>
</body>
</html>