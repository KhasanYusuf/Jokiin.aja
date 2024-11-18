@extends('admin/adminBase')
@section('title', '| Data Pelanggan')
@section('content')
        <div id="main">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Pelanggan</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Pelanggan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Anam</td>
                                        <td>anam@gmail.com</td>
                                        <td>089222222222</td>
                                        <td>
                                            <a href="#" class="badge btn btn-primary">Detail</a>
                                            <a href="#" class="badge btn btn-dark">Edit</a>
                                            <a href="#" class="badge btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Yusuf</td>
                                        <td>yusuf@gmail.com</td>
                                        <td>089333333333</td>
                                        <td>
                                            <a href="#" class="badge btn btn-primary">Detail</a>
                                            <a href="#" class="badge btn btn-dark">Edit</a>
                                            <a href="#" class="badge btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Abad</td>
                                        <td>abad@gmail.com</td>
                                        <td>089444444444</td>
                                        <td>
                                            <a href="#" class="badge btn btn-primary">Detail</a>
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
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <script src="assets/js/main.js"></script>
@endsection
