@extends('layouts.app')

@section('title', 'InstaApp')

@push('css')
   <style>

   </style>
@endpush

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-6 m-4">
            <div class="card">
               <div class="card-body p-0">
                  <!-- Nama akun dan avatar -->
                  <div class="user-content">
                     <img class="img-circle" src="https://www.shareicon.net/data/512x512/2017/01/06/868320_people_512x512.png" width="30px" height="30px" alt="User Avatar">
                     <a href="#"><span class="ml-2">Lorem Ipsum</span></a>
                  </div>
                  <!-- ./Nama akun dan avatar -->
                  <!-- Postingan gambar -->
                  <div class="image-content">
                     <img src="https://cdns.klimg.com/bola.net/library/upload/21/2020/10/hauge-1_2f87027.jpg" width="100%" alt="">
                  </div>
                  <!-- ./Postingan gambar -->
                  <!-- Konten like -->
                  <div class="like-content">
                     {{-- btn-danger --}}
                     <button class="btn btn-default border-0"><span class="fas fa-thumbs-up"></span> Like</button>
                        <small class="float-right text-muted" style="margin: 8px 4px 0px 0px">
                           1,000 suka
                        </small>
                  </div>
                  <!-- ./Konten like -->
                  <!-- Body/Caption -->
                  <div class="content-body">
                     <a href="#"><span>Lorem Ipsum</span></a>
                     <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed optio voluptas dolore consequatur accusamus natus cum assumenda recusandae maiores fugiat.</span>
                  </div>
                  <!-- ./Body/Caption -->
                  <!-- Komentar -->
                  <div class="card-footer card-comments pl-3 pr-3 pt-2 pb-1">
                     <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="User Image">
                        
                        <div class="comment-text">
                           <span class="username">
                           Maria Gonzales
                           <span class="text-muted float-right">8:03 PM Today</span>
                           </span>
                           <p>
                              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                           </p>
                        </div>
                     </div>
                     <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="User Image">
                        
                        
                        <div class="comment-text">
                           <span class="username">
                           Maria Gonzales
                           <span class="text-muted float-right">8:03 PM Today</span>
                           </span>
                           <p>
                              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="card-footer pl-1 pr-1 pb-1 pt-0">
                     <div class="row justify-content-center">
                        <div class="col-md-11">
                           <input type="text" placeholder="Tambahkan komentar..." class="input-comment" name="" id="">
                        </div>
                        <div class="col-md-1 p-0 text-left ">
                           <a class="btn-kirim-komentar" href="#">Kirim</a>
                        </div>
                     </div>
                  </div>
                  <!-- ./Komentar -->
               </div>
            </div>
         </div>
      </div>
      {{--  --}}
      <div class="row justify-content-center">
         <div class="col-md-6 m-4">
            <div class="card">
               <div class="card-body p-0">
                  <!-- Nama akun dan avatar -->
                  <div class="user-content">
                     <img class="img-circle" src="https://www.shareicon.net/data/512x512/2017/01/06/868320_people_512x512.png" width="30px" height="30px" alt="User Avatar">
                     <a href="#"><span class="ml-2">Lorem Ipsum</span></a>
                  </div>
                  <!-- ./Nama akun dan avatar -->
                  <!-- Postingan gambar -->
                  <div class="image-content">
                     <img src="https://cdns.klimg.com/bola.net/library/upload/21/2020/10/hauge-1_2f87027.jpg" width="100%" alt="">
                  </div>
                  <!-- ./Postingan gambar -->
                  <!-- Konten like -->
                  <div class="like-content">
                     {{-- btn-danger --}}
                     <button class="btn btn-default border-0"><span class="fas fa-thumbs-up"></span> Like</button>
                        <small class="float-right text-muted" style="margin: 8px 4px 0px 0px">
                           1,000 suka
                        </small>
                  </div>
                  <!-- ./Konten like -->
                  <!-- Body/Caption -->
                  <div class="content-body">
                     <a href="#"><span>Lorem Ipsum</span></a>
                     <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed optio voluptas dolore consequatur accusamus natus cum assumenda recusandae maiores fugiat.</span>
                  </div>
                  <!-- ./Body/Caption -->
                  <div class="card-footer card-comments pl-3 pr-3 pt-2 pb-1">
                     <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="User Image">
                        
                        <!-- Komentar -->
                        <div class="comment-text">
                           <span class="username">
                           Maria Gonzales
                           <span class="text-muted float-right">8:03 PM Today</span>
                           </span>
                           <p>
                              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                           </p>
                        </div>
                     </div>
                     <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="User Image">
                        
                        
                        <div class="comment-text">
                           <span class="username">
                           Maria Gonzales
                           <span class="text-muted float-right">8:03 PM Today</span>
                           </span>
                           <p>
                              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="card-footer pl-1 pr-1 pb-1 pt-0">
                     <div class="row justify-content-center">
                        <div class="col-md-11">
                           <input type="text" placeholder="Tambahkan komentar..." class="input-comment" name="" id="">
                        </div>
                        <div class="col-md-1 p-0 text-left ">
                           <a class="btn-kirim-komentar" href="#">Kirim</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ./Komentar -->
            </div>
         </div>
      </div>
   </div>
@endsection