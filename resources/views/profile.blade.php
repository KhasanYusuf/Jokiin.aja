@extends('base')
@section('title', '| Profile')
    @section('head')
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/css/app.css">
    @endsection

@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item active">
                            <a href="user-profile.html" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu">
                        <li class="sidebar-item  ">
                            <a href="user-pembelian.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Pembelian</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-5 active">
                            <a href="#" class='sidebar-link' style="background-color: rgb(177, 53, 53);">
                                <i class="bi bi-box-arrow-left"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
@endsection
