<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >@yield('title', 'Dashboard') </title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>

<style>
    /* CSS untuk menghilangkan panah */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }
</style>

<body>
    <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="user-menu">
                            <ul>
                                <li><a href="{{url('profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="{{url('/')}}"><i class="fa fa-heart"></i> Dashboard</a></li>
                                <li><a href="{{url('post/create')}}"><i class="fa fa-heart"></i> Tambah</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> Penarikan</a></li>
                                <li><form method="POST" action="{{url('/logout')}}"> @csrf <button type="submit"><i class="fa fa-user"></i> Logout</button></form></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
