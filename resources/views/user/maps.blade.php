@extends('main')
@section('isi')
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/bg_keren.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
          <div class="row">
            <div class="col-lg-7 col-md-10">

                <h1 class="display-2 text-white">Google Maps Kanesa</h1>
                <p class="text-white mt-0 mb-5">Jika ingin melakukan pembayaran secara langsung , dapat mengunjungi langsung SMKN 1 Kepanjen pada lokasi yang tertera...</p>
              <a href="https://www.google.com/maps?ll=-8.142659,112.585791&z=11&t=m&hl=en-US&gl=ID&mapclient=embed&cid=18143912793420062489" class="btn btn-neutral">Jl. Kedungpedaringan, Kepanjen,
                Kab. Malang Telp. (0341) 395777
                Fax. (0341) 395767 Prov. Jawa Timur</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Page content -->
      <div class="container mt--6">
        <div class="row">
          <div class="col">
            <div class="card border-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d252774.07193942877!2d112.585791!3d-8.142659!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfbcc208e1777df19!2sSMKN%201%20Kepanjen!5e0!3m2!1sen!2sid!4v1643285096391!5m2!1sen!2sid" width="900" height="500" style="border:0;" loading="lazy"></iframe>
            </div>
          </div>
        </div>

    </div>
@endsection
