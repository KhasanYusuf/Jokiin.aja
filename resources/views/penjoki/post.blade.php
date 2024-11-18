<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/bold.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item">
                            <a href="profil-joki.html" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active">
                            <a href="dashboard-joki.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="penarikan.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Penarikan</span>
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
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-content">
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <a href="" class="btn btn-danger" style="margin-bottom: 40px;">Kembali</a>
                            <h4 class="card-title">Tambah Produk</h4>
                        </div>
                        <form method="POST" action="/posts" enctype="multipart/form-data">
                            @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">Judul</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="" id="title" name="title" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="helpInputTop">Detail</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="details" name="details" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="helperText">Durasi Pengerjaan</label>
                                        <input type="number" id="helperText" class="form-control" placeholder="" id="duration" name="duration" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="disabledInput">Harga</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="price" name="price" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="readonlyInput">Gambar</label>
                                        <fieldset>
                                            <div class="input-group mb-3">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupFile01"><i class="bi bi-upload"></i></label>
                                                    <input type="file" class="form-control" id="inputGroupFile01" name="images[]" multiple>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
