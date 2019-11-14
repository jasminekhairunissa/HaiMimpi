@extends('layouts.master')
@section('content')
    <!-- ================ Start Registration Area ================= -->
  <section class="registration-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm">
          <div class="section-title text-left text-white">
              <h2 class="text-white">
                Satu Langkah lagi <br>
                Dekati Mimpimu
              </h2>
              <p>
                Daftarkan dirimu dan akses berbagai materi menarik!
              </p>
          </div>
            </div>
        <div class="col-sm">
          <div class="course-form-section">
            <h3 class="text-white">Daftar Gratis</h3>
            <p class="text-white">Waktunya mulai langkahmu</p>
            <form class="course-form-area contact-page-form course-form text-right" id="myForm" action="mail.html" method="post">
              <div class="row">
              <div class="col">
                <div class="form-group col-md-12">
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Nama Lengkap'">
                </div>
              </div>
              <div class="col">
                <div class="form-group col-md-12">
                <input type="text" class="form-control" id="namapanggilan" name="namapanggilan" placeholder="Nama Panggilan" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Nama Panggilan'">
                </div>
              </div>
              </div>
              <div class="form-group col-md-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Email Address'">
              </div>
              <div class="form-group col-md-12">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Password'">
              </div>
              <div class="row">
              <div class="col">
                <div class="form-group col-md-12">
                  <input type="location" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir" onfocus="this.placeholder = ''"
                   onblur="this.placeholder = 'Tempat Lahir'">
                </div>
              </div>
              <div class="col">
                <div class="form-group col-md-12">
                    <input type="date" class="form-control" id="tanggallahir" width="276" />
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap4'
                        });
                    </script>
                </div>
              </div>  
              </div>
              <div class="col-lg-12 text-center">
                <button class="btn text-uppercase">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
  </section>
  <!-- ================ End Registration Area ================= -->

@stop