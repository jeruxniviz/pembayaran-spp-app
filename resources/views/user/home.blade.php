@extends('main')
@section('isi')
    <body >
        <div class="container-fluid text-center bg-light p-4 ">
            <img class="mb-4" src="img/kanesa_logo.png" alt="" width="100" height="100">
            <h1 class="display-5 fw-bold">Selamat Datang</h1>
            <h3 class="display-5 fw-bold">Admin</h3>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Aplikasi Pembayaran SPP SMK Negeri 1 Kepanjen, Lakukan Pembayaran , Lihat histori pembayaran dan Cetak bukti pembayaran dalam satu aplikasi.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center my-auto">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Bayar sekarang</button>
                    <button type="button" class="btn btn-outline-warning btn-lg px-4">Nanti aja</button>
                </div>
            </div>
        </div>
    </body>
@endsection
