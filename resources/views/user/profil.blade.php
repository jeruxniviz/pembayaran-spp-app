@extends('main')
@section('isi')
        <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/bg_keren.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
              <div class="row">
                <div class="col-lg-7 col-md-10">
                  <h1 class="display-2 text-white">Muhammad Abdul Aziz</h1>
                  <p class="text-white mt-0 mb-5">Ini adalah halaman Profil. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
                  <a href="#!" class="btn btn-neutral">...</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Page content -->
          <div class="container-fluid mt--6">
            <div class="row">
              <div class="col-xl-4 order-xl-2">
                <div class="card card-profile">
                  <img src="../assets/img/theme/bg_keren.jpg" alt="Image placeholder" class="card-img-top">
                  <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                      <div class="card-profile-image">
                        <a href="#">
                          <img src="../assets/img/theme/team-5.jpg" class="rounded-circle">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="row">
                      <div class="col">
                        <div class="card-profile-stats d-flex justify-content-center">
                          {{-- <div>
                            <span class="heading">22</span>
                            <span class="description">Friends</span>
                          </div>
                          <div>
                            <span class="heading">10</span>
                            <span class="description">Photos</span>
                          </div>
                          <div>
                            <span class="heading">89</span>
                            <span class="description">Comments</span>
                          </div> --}}
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <h5 class="h3">
                        Muhammad Abdul Aziz
                      </h5>
                      {{-- <div class="h5 font-weight-300">
                        <i class="ni location_pin mr-2"></i>Bucharest, Romania
                      </div>
                      <div class="h5 mt-4">
                        <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                      </div> --}}
                      <div>
                        <i class="ni education_hat mr-2"></i>12 RPL 1
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 order-xl-1">
                <div class="card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h2 class="mb-0"> Profil </h2>
                      </div>
                      {{-- <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                      </div> --}}
                    </div>
                  </div>
                  <div class="card-body">
                    <form>
                      <h6 class="heading-small text-muted mb-4">Informasi Data Diri Anda</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Nama Lengkap</label>
                              <input type="text" id="input-username" class="form-control " readonly value="Muhammad Abdul Aziz">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-email">Nomor Induk Siswa</label>
                              <input type="email" id="input-email" class="form-control" readonly placeholder="2077" value="2077">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-first-name">Nama Depan</label>
                              <input type="text" id="input-first-name" class="form-control" readonly placeholder="First name" value="Muhammad">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-last-name">Nama Belakang</label>
                              <input type="text" id="input-last-name" class="form-control" readonly placeholder="Last name" value="Aziz">
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="my-4" />
                      <!-- Address -->
                      {{-- <h6 class="heading-small text-muted mb-4">Contact information</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="form-control-label" for="input-address">Address</label>
                              <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-city">City</label>
                              <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-country">Country</label>
                              <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label" for="input-country">Postal code</label>
                              <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="my-4" /> --}}
                      <!-- Description -->
                      {{-- <h6 class="heading-small text-muted mb-4">About me</h6>
                      <div class="pl-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">About Me</label>
                          <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                        </div>
                      </div> --}}
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
@endsection
