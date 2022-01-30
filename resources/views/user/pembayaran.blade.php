@extends('main')
@section('isi')

<!-- Header -->
<div class="header pb-2 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/bg_keren.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">

            <h1 class="display-2 text-white">Pembayaran Spp</h1>
            <p class="text-white mt-0 mb-5">Jika ingin melakukan pembayaran secara langsung , dapat mengunjungi langsung SMKN 1 Kepanjen pada lokasi yang tertera...</p>
          <a href="#!" class="btn btn-neutral">...</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container mt--6">
    <div class="col-fluid">
        <div class="card">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Page visits</h3>
              </div>
              <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Page name</th>
                  <th scope="col">Visitors</th>
                  <th scope="col">Unique users</th>
                  <th scope="col">Bounce rate</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    /argon/
                  </th>
                  <td>
                    4,569
                  </td>
                  <td>
                    340
                  </td>
                  <td>
                    <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/index.html
                  </th>
                  <td>
                    3,985
                  </td>
                  <td>
                    319
                  </td>
                  <td>
                    <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/charts.html
                  </th>
                  <td>
                    3,513
                  </td>
                  <td>
                    294
                  </td>
                  <td>
                    <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/tables.html
                  </th>
                  <td>
                    2,050
                  </td>
                  <td>
                    147
                  </td>
                  <td>
                    <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/profile.html
                  </th>
                  <td>
                    1,795
                  </td>
                  <td>
                    190
                  </td>
                  <td>
                    <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

</div>

  @endsection
