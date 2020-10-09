@extends('layouts.app')

@section('title', 'InstaApp')

@push('css')
   <style>
      label{
         font-size: 11px;
         font-weight: normal;
      }

      .font-size-11 {
         font-size: 11px;
      }

      .form-control {
         height: 35px;
      }

   </style>
@endpush

@section('content')
<div class="row justify-content-center">
   <div class="col-md-6 m-4">
      <!--Ubah Password-->
      <div class="card">
         <div class="card-header">
            <h4 class="card-title">Tambah Postingan</h4>
         </div>
         <form action="{{ route('add-post') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="row">
                  <div class="col-md-2 text-right mt-1">
                     <label for="">
                        Upload Foto
                     </label>
                  </div>
                  <div class="col-md-8">
                     <div>
                        <input type="file" class="form-control font-size-11" name="image" id="profil">
                     </div>
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-2 text-right mt-1">
                     <label for="">
                        Caption
                     </label>
                  </div>
                  <div class="col-md-8">
                     <textarea class="form-control font-size-11" name="caption" rows="3"></textarea>
                  </div>
               </div>
               <div class="row mt-2">
                  <div class="col-md-2 text-right mt-1">
                     
                  </div>
                  <div class="col-md-8">
                     <input type="submit" value="Tambah Postingan" class="btn btn-primary btn-sm">
                  </div>
               </div>
            </div>
         </form>
      </div>

   </div>
</div>
@endsection