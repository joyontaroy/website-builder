<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-------------------- Jquery Js --------------------->
<script src="{{ asset('assets/home/js/jquery-3.7.1.min.js') }}"></script>
<!-- Page specific assets -->
<script src="{{ asset('assets/home/js/owl.carousel.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/home/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/owl.theme.default.min.css') }}">
<!-- Jquery Ui Css -->
<link rel="stylesheet" href="{{ asset('assets/home/css/jquery-ui.css') }}">
<!-------------- Nice Select  Css ----------------->
<script src="{{ asset('assets/home/js/jquery.nice-select.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/home/css/nice-select.css') }}">
<!-------------- Fontawasome  Css ----------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/all.min.css') }}">
<!--------------- Custom Fronts  --------------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/custome-front/custom-fronts.css') }}">
<!-------------- Bootstrap   ----------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap.min.css') }}">
<script src="{{ asset('assets/home/js/bootstrap.bundle.min.js') }}"></script>
<!-------------- Main Css ----------------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/responsive.css') }}">


    {!! $page_data->html !!}
