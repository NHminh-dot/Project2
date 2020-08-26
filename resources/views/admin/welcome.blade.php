<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/circular-std_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts/fontawesome/css/fontawesome-all.css') }}">
@hasSection('content')
    <link rel="stylesheet" href="{{ asset('css/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables/buttons.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables/select.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables/fixedHeader.bootstrap4.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('css/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}">
@endif
    <title>Assmin</title>
</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('admin/layout/navbar')
        @include('admin/layout/sidebar')
        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="ecommerce-widget">
                        @if (Session::has('success'))
                            {{ Session::get('success') }}
                        @endif
                        
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
     <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main-js.js') }}"></script>
@hasSection('content')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('js/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/datatables/data-table.js') }}"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
@else
    <!-- chart chartist js -->
    {{-- <script src="{{ asset('js/chartist.min.js') }}"></script> --}}
    <!-- sparkline js -->
    {{-- <script src="{{ asset('js/jquery.sparkline.js') }}"></script> --}}
    <!-- morris js -->
    {{-- <script src="{{ asset('js/raphael.min.js') }}"></script>
    <script src="{{ asset('js/morris.js') }}"></script> --}}
    <!-- chart c3 js -->
    {{-- <script src="{{ asset('js/c3.min.js') }}"></script>
    <script src="{{ asset('js/d3-5.4.0.min.js') }}"></script>
    <script src="{{ asset('js/C3chartjs.js') }}"></script>
    <script src="{{ asset('js/dashboard-ecommerce.js') }}"></script> --}}
@endif
    
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
