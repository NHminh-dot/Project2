<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="{{asset('css/concept-master_assets_vendor_bootstrap_css_bootstrap.min.css')}}">
    <link href="{{asset('css/concept-master_assets_libs_css_style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/concept-master_assets_vendor_fonts_circular-std_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/concept-master_assets_vendor_fonts_fontawesome_css_fontawesome-all.css')}}">
    <title>Assmin</title>
</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('layout/navbar')
        @include('layout/sidebar')
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="ecommerce-widget">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
 
</html>