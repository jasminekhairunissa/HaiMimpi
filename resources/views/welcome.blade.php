@extends('layouts.master')
@section('content')

    <section class="home-banner-area">
        <div class="container">
            <div class="row justify-content-center fullscreen align-items-center">
                <div class="col-lg-5 col-md-8 home-banner-left">
                    <h1 class="text-white" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                    Selamat datang
                    Pemimpi!
                    </h1>
                    <p class="text-white" style="font-size: 1.4em">
                        Mulai perjalanan gapai mimpi-mimpimu</p>
                    <a href="{{ backpack_url('register') }}" class="genric-btn success radius arrow" style="width:31em; font-weight:700; font-size:2em; box-shadow: 1px 10px 48px -2px rgba(0,0,0,0.75); padding-left:0.5em">DAFTAR SEKARANG<span class="lnr lnr-arrow-right"></span></a>
                    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                   aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body mx-3">
                            <div class="md-form">
                              <i class="fas fa-envelope prefix grey-text"></i>
                              <input type="email" id="email" class="form-control validate">
                              <label data-error="wrong" data-success="right" for="email">Your email</label>
                            </div>
                            <div class="md-form">
                              <i class="fas fa-lock prefix grey-text"></i>
                              <input type="password" id="password" class="form-control validate">
                              <label data-error="wrong" data-success="right" for="password">Your password</label>
                            </div>

                          </div>
                          <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-default">Login</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  <p class="text-white">sudah punya akun? <a href="{{ backpack_url('login') }}" style="color:#4cd3e3" data-toggle="modal" data-target="#modalLoginForm">login disini.</a></p>
                </div>
                <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
                <img class="img-fluid" src="{{asset('eclipse/img/header-img.png')}}" alt="" />
                </div>
            </div>
        </div>
    </section>
 <!-- ================ Start Feature Area ================= -->
 <section class="feature-area">
    <div class="container-fluid">
      <div class="feature-inner row">
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex">
            <i class="ti-book"></i>
            <div class="ml-20">
              <h4>Daftar Mimpi</h4>
              <p>
                Lihat perjalananmu menggapai mimpi
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex">
            <i class="ti-cup"></i>
            <div class="ml-20">
              <h4>Mentoring</h4>
              <p>
               Mentor-mentor berpengalaman yang siap memotivasi tiap langkahmu
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex border-right-0">
            <i class="ti-desktop"></i>
            <div class="ml-20">
              <h4>Berbagi Pengalaman</h4>
              <p>
               Keadaan tak selamanya sulit ketika kita tak sendiri 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Feature Area ================= -->

  <!-- ================ Start Popular Course Area ================= -->
  <section class="popular-course-area section-gap">
   
  </section>
  <!-- ================ End Popular Course Area ================= -->

 
@stop
