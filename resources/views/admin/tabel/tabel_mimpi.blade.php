@extends('admin/admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mimpi</h3>
                <div class="card-tools">
                 <a href="{{ URL::to('/admin/product/create')}}" class="btn btn-tool">
                     <i class="fa fa-plus"></i>
                     &nbsp; Add
                 </a>
             </div>
         </div>
         <div class="card-body">
            @if (Session::has('message'))
            <div id="alert-msg" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Judul Mimpi</th>
                                <th>Detail Mimpi</th>
                                <th>Jumlah Langkah yang Dibutuhkan</th>
                                <th>Rencana Mimpi</th>
                                <th>Prioritas</th>
                                <th>Tahapan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        
                    </table>
 
 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
 
@endsection