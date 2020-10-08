@extends('layouts.app')

@section('title', 'InstaApp')

@push('css')
   <style>
      .user-content {
         margin: 10px;
      }

      .user-content a {
         color: black;
         font-size: 13px;
      }

      .image-content {
         width: 100%;
      }
   </style>
@endpush

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-6 m-4">
            <div class="card">
               <div class="card-body p-0">
                  <div class="user-content">
                     <img class="img-circle" src="https://www.shareicon.net/data/512x512/2017/01/06/868320_people_512x512.png" width="30px" height="30px" alt="User Avatar">
                     <a href="#"><span class="ml-2">Lorem Ipsum</span></a>
                  </div>
                  <div class="image-content">
                     <img src="https://cdns.klimg.com/bola.net/library/upload/21/2020/10/hauge-1_2f87027.jpg" width="100%" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection