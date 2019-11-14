@extends('layouts.master')
@section('content')

<section class="dreamlist-area">
    <div class="container"style="height:42em">
        <div class="progresspath">
            <div class="row" >
                <div class="col">
            <h2 class="text-white"> </h2>
            <div class="row">
                <div class="col-sm-1">
                    <p class="text-white">Mimpi #1</p>
                </div>
                <div class="col-sm-1" style="padding:0%; margin:0%">
                    <button class="btn btn-info">edit</button>    
                </div> 
                <div class="col-sm-10" style="padding: 0%; margin:0%">
                        <button class="btn btn-danger">hapus</button>    
                </div>    
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" 
                role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" 
                style="width: 90%">90%</div>
            </div>
            <br>
            <div class="row">
                    <div class="col-sm-1">
                        <p class="text-white">Mimpi #2</p>
                    </div>
                    <div class="col-sm-1" style="padding:0%; margin:0%">
                        <button class="btn btn-info">edit</button>    
                    </div> 
                    <div class="col-sm-10" style="padding: 0%; margin:0%">
                            <button class="btn btn-danger">hapus</button>    
                    </div>    
                </div>
            <div class="progress">
                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" 
                role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" 
                style="width: 10%">10%</div>
            </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="col-lg-12 text-center">    
            <button class="btn text-uppercase btn-block" data-toggle="modal" data-target="#modalMimpiBaru">Tulis mimpi baru</button>
        </div>
        <div class="modal fade" id="modalMimpiBaru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header text-center">
                 <h4 class="modal-title w-100 font-weight-bold">Tulis Mimpi Baru</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body mx-3">
                    <div class="course-form-section">
                            <form class="course-form-area contact-page-form course-form text-right" id="myForm" action="mail.html" method="post">
                              
                                <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="judulmimpi" name="judulmimpi" placeholder="Judul Mimpi" onfocus="this.placeholder = ''"
                                 onblur="this.placeholder = 'Judul Mimpi'">
                                </div>
                              
                                <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="detailmimpi" name="detailmimpi" placeholder="Detail Mimpi" onfocus="this.placeholder = ''"
                                 onblur="this.placeholder = 'Detail Mimpi'">
                                </div>
                             
                                <div class="form-group col-md-12">
                                <input type="number" class="form-control" id="step" name="step" placeholder="Jumlah langkah yang dibutuhkan" onfocus="this.placeholder = ''"
                                 onblur="this.placeholder = 'Jumlah langkah yang dibutuhkan'">
                              </div>
                              <div class="col-lg-12 text-center">
                                <button class="btn text-uppercase">Simpan</button>
                              </div>
                            </form>
                          </div>

               </div>
             </div>
           </div>
         </div>
    </div>
</section>

@stop