<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokiin.Aja | Riwayat</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item">
                            <a href="user-profile.html" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu">
                        <li class="sidebar-item active ">
                            <a href="user-pembelian.html" class='sidebar-link'>
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
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Riwayat Pembelian</h3>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Toko</th>
                                        <th>Biaya</th>
                                        <th>Metode</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Joki Leveling Up</td>
                                        <td>Joki Store</td>
                                        <td>Rp 50000</td>
                                        <td>Qris</td>
                                        <td>
                                            <a href="#" class="badge btn btn-dark">Edit</a>
                                            <a href="#" class="badge btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>

    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <script src="assets/js/main.js"></script>

</body>
</html>