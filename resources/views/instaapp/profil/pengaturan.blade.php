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
         <form action="{{ route('pengaturan.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body p-3">
               <div class="row">
                  <div class="col-md-2 text-right">
                     @if (\Auth::user()->avatar == 'NO IMAGE')
                        <img class="img-circle" src="{{ asset('img/avatar.png') }}" width="70px" height="70px" alt="User Avatar">
                        
                     @else
                        <img class="img-circle" src="{{ asset('storage/' . \auth::user()->avatar) }}" width="70px" height="70px" alt="User Avatar">
                        
                     @endif
                  </div>
                  <div class="col-md-8">
                     <label>Ubah foto profil</label>
                     <div>
                        <input type="file" class="form-control font-size-11" name="avatar">
                     </div>
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-2 text-right mt-1">
                     <label for="">
                        Username
                     </label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" class="form-control font-size-11" name="username" value="{{ \Auth::user()->username }}">
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-2 text-right mt-1">
                     <label for="">
                        Nama Pengguna
                     </label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" class="form-control font-size-11" name="name" value="{{ \Auth::user()->name }}">
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-2 text-right mt-1">
                     <label for="">
                        Bio
                     </label>
                  </div>
                  <div class="col-md-8">
                     <textarea class="form-control font-size-11" name="bio" cols="30" rows="2">{{ \Auth::user()->bio }}</textarea>
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-2 text-right mt-1">
                     <label for="">
                        Email
                     </label>
                  </div>
                  <div class="col-md-8">
                     <input type="email" class="form-control font-size-11" name="email" value="{{ \Auth::user()->email }}">
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-2 text-right mt-1">
                     <label for="">
                        Nomor Telepon
                     </label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" class="form-control font-size-11" name="telp" value="{{ \Auth::user()->telp }}">
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
         </form>
      </div>
   
      <!--Ubah Password-->
      <div class="card">
         <div class="card-header">
            <h4 class="card-title">Ubah Password</h4>
         </div>
         <form action="{{ route('pengaturan.ubah-password') }}" method="post">
            @csrf
            @method('put')
            <div class="card-body">
               <div class="row">
                  <div class="col-md-2 text-right mt-1">
                     <label for="">
                        Kata Sandi Lama
                     </label>
                  </div>
                  <div class="col-md-8">
                     <input type="password" class="form-control font-size-11" name="old_password">
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-2 text-right mt-1">
                     <label for="">
                        Kata Sandi Baru
                     </label>
                  </div>
                  <div class="col-md-8">
                     <input type="password" class="form-control font-size-11" name="password">
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-2 text-right mt-1">
                     <label for="">
                        Konfirmasi Kata Sandi Baru
                     </label>
                  </div>
                  <div class="col-md-8">
                     <input type="password" class="form-control font-size-11" name="password_confirmation">
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
         </form>
      </div>

   </div>
</div>
@endsection