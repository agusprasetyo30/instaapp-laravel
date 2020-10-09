@extends('layouts.app')

@section('title', 'InstaApp | Profil')

@push('css')
   <style>
      .posts img {
         width: 100%;
         height: 200px;
      }

      .btn-edit-profil {
         border: 1px solid #c9c9c9;
         margin-left: 7px;
         font-size: 11px;
      }
   </style>
@endpush

@section('content')
<div class="container">
   <!--Foto profil & Nama-->
   <div class="row justify-content-center">
      <div class="col-md-8 m-4">
         <div class="row">
            <div class="col-md-4 text-center">
               <img src="https://www.shareicon.net/data/512x512/2017/01/06/868320_people_512x512.png" class="img-circle" style="width: 110px"  alt="">
            </div>
            <div class="col-md-8">
               <h4 class="d-inline">Agus Prasetyo</h4> 
               <a class="btn btn-sm btn-edit-profil" href="{{ route('pengaturan') }}">Edit Profil</a>
               <a class="btn btn-sm btn-edit-profil" href="{{ route('add-post') }}">Tambah Postingan</a>
               
               <h5>(agusprasetyo30)</h5>
               <small>agusprasetyo1889@gmail.com</small>
            </div>
         </div>
      </div>
   </div>

   <div class="row justify-content-center">
      <div class="col-md-8 m-4">
         <div class="row">
            <div class="col-md-4">
               <a href="{{ route('post') }}">
                  <div class="card">
                     <div class="posts">
                        <img src="https://mmc.tirto.id/image/otf/500x0/2018/11/14/timnas-indonesia-vs-timor-leste-tirto.id-mico-8_ratio-16x9.jpg" class="img-thumbnail" alt="">
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-md-4">
               <a href="#">
                  <div class="card">
                     <div class="posts">
                        <img src="https://ligacdn.com/storage/images/news/2020/10/08/jens-petter-hauge-ungkapkan-kebahagiaan-usai-debut-bersama-milan.jpeg" class="img-thumbnail" alt="">
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-md-4">
               <a href="#">
                  <div class="card">
                     <div class="posts">
                        <img src="https://ligacdn.com/storage/images/news/2020/10/08/jens-petter-hauge-ungkapkan-kebahagiaan-usai-debut-bersama-milan.jpeg" class="img-thumbnail" alt="">
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection