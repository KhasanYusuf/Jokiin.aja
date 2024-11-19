@extends('penjoki/basepenjoki')
@section('content')
    <div id="app">
        <!-- <div id="sidebar" class="active">
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
                        <li class="sidebar-item">
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
                <button class="sidebar-toggler btn x"><i class="bi bi-x"></i></button>
            </div>
        </div> -->

        <div id="main">

            <div class="page-content">
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <a href="#" class="btn btn-danger" style="margin-bottom: 40px;">Kembali</a>
                            <h4 class="card-title">Tambah Produk</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                                        @csrf
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="basicInput">Judul</label>
                                            <input type="text" class="form-control" id="title" name="title" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="helpInputTop">Detail</label>
                                            <textarea class="form-control" id="details" name="details" rows="3" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="helperText">Durasi Pengerjaan</label>
                                            <input type="number" class="form-control" id="duration" name="duration" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="disabledInput">Harga</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Rp</span>
                                                <input type="text" class="form-control" id="price" name="price" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="readonlyInput">Gambar</label>
                                            <fieldset>
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupFile01"><i class="bi bi-upload"></i></label>
                                                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @endsection
