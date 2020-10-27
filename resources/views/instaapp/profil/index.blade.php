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
               @if ($user['avatar'] == 'NO IMAGE')
                  <img class="img-circle" src="{{ asset('img/avatar.png') }}" style="width: 130px; height: 130px" alt="User Avatar">

               @else
                  <img src="{{ asset('storage/' . $user['avatar']) }}" class="img-circle elevation-2" style="width: 130px; height: 130px"  alt="">               
               @endif
            </div>
            <div class="col-md-8">
               <h4 class="d-inline">{{ $user['name'] }}</h4>
               
               @if (Request::get('profile') == 'profile')
                  <a class="btn btn-sm btn-edit-profil" href="{{ route('pengaturan') }}">Edit Profil</a>
                  <a class="btn btn-sm btn-edit-profil" href="{{ route('add-post-page') }}">Tambah Postingan</a>
               @endif 
               
               <h5>({{ $user['username'] }})</h5>
               <small>{{ $user['email'] }}</small>
               <p>
                  <small>{{ $user['bio'] }}</small>
               </p>
            </div>
         </div>
      </div>
   </div>

   <div class="row justify-content-center">
      <div class="col-md-8 m-4">
         <div class="row">
            @if (!$posts->isEmpty())
               @foreach ($posts as $post)
                  <div class="col-md-4">
                     <a href="{{ route('user.post.detail', ['username' => \Auth::user()->username, 'id' => $post->id]) }}">
                        <div class="card">
                           <div class="posts">
                              <img src="{{ asset('storage/' . $post->image) }}" class="img-thumbnail" alt="">
                           </div>
                        </div>
                     </a>
                  </div>
               @endforeach
            
            @else
               <div class="col-md-12 text-center">
                  <small class="text-muted">Tidak ada data</small>
               </div>
            @endif


         </div>
      </div>
   </div>
</div>
@endsection