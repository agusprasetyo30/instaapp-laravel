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
      <div class="card">
         <div class="card-header">
            <h4 class="card-title">Pengaturan</h4>
         </div>
         <div class="card-body p-3">
            <div class="row">
               <div class="col-md-2 text-right">
                  <img class="img-circle" src="https://www.shareicon.net/data/512x512/2017/01/06/868320_people_512x512.png" width="70px" height="70px" alt="User Avatar">
               </div>
               <div class="col-md-8">
                  <label for="profil">Ubah foto profil</label>
                  <div>
                     <input type="file" class="form-control font-size-11" name="" id="profil">
                  </div>
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-2 text-right mt-1">
                  <label for="">
                     Nama
                  </label>
               </div>
               <div class="col-md-8">
                  <input type="text" class="form-control font-size-11" name="" id="">
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-2 text-right mt-1">
                  <label for="">
                     Nama Pengguna
                  </label>
               </div>
               <div class="col-md-8">
                  <input type="text" class="form-control font-size-11" name="" id="">
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-2 text-right mt-1">
                  <label for="">
                     Bio
                  </label>
               </div>
               <div class="col-md-8">
                  <textarea class="form-control font-size-11" name="" id="" cols="30" rows="2"></textarea>
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-2 text-right mt-1">
                  <label for="">
                     Email
                  </label>
               </div>
               <div class="col-md-8">
                  <input type="email" class="form-control font-size-11" name="" id="">
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-2 text-right mt-1">
                  <label for="">
                     Nomor Telepon
                  </label>
               </div>
               <div class="col-md-8">
                  <input type="email" class="form-control font-size-11" name="" id="">
               </div>
            </div>
            <div class="row mt-2">
               <div class="col-md-2 text-right mt-1">
                  
               </div>
               <div class="col-md-8">
                  <input type="submit" value="Kirim" class="btn btn-primary btn-sm">
               </div>
            </div>
         </div>
      </div>
   
      <!--Ubah Password-->
      <div class="card">
         <div class="card-header">
            <h4 class="card-title">Ubah Password</h4>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-2 text-right mt-1">
                  <label for="">
                     Kata Sandi Lama
                  </label>
               </div>
               <div class="col-md-8">
                  <input type="text" class="form-control font-size-11" name="" id="">
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-2 text-right mt-1">
                  <label for="">
                     Kata Sandi Baru
                  </label>
               </div>
               <div class="col-md-8">
                  <input type="text" class="form-control font-size-11" name="" id="">
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-2 text-right mt-1">
                  <label for="">
                     Konfirmasi Kata Sandi Baru
                  </label>
               </div>
               <div class="col-md-8">
                  <input type="text" class="form-control font-size-11" name="" id="">
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 text-right mt-1">
                  
               </div>
               <div class="col-md-8">
                  <input type="submit" value="Ubah Kata Sandi" class="btn btn-primary btn-sm">
               </div>
            </div>
         </div>
      </div>

   </div>
</div>
@endsection