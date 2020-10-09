@extends('layouts.app')

@section('title', 'InstaApp')

@push('css')
   <style>
      .font-size-13 {
         font-size: 13px;
      }
   </style>
@endpush

@section('content')
   <div class="row justify-content-center m-4">
      <div class="col-md-8 ">
         <div class="row">
            <div class="col-md-7">
               <img src="https://www.satupedia.com/wp-content/uploads/2020/10/Usai-Jadi-Pemain-AC-Milan-Jens-Petter-Hauge-Langsung-Dipanggil-Timnas-Norwegia-620x330.jpg" width="100%" alt="">
            </div>
            <div class="col-md-5">
               <img class="img-circle" src="https://www.shareicon.net/data/512x512/2017/01/06/868320_people_512x512.png" width="40px" height="40px" alt="User Avatar">
               <a href="{{ route('profile') }}" style="color: black">
                  <span class="font-size-13 ml-2">
                     agusprasetyo30
                  </span>
               </a>
               <hr>
               <div class="content-body" style="overflow: auto; height: 400px;">
                  <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed optio voluptas dolore consequatur accusamus natus cum assumenda recusandae maiores fugiat.</span>
                  
                  <div class="card-footer card-comments mt-2 pl-3 pr-3 pt-2 pb-1">
                     <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="User Image">
                        
                        <!-- Komentar -->
                        <div class="comment-text">
                           <span class="username">
                              <a href="{{ route('profile') }}" style="color: black">
                                 Maria Gonzales
                              </a>
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
                              <a href="{{ route('profile') }}" style="color: black">
                                 Maria Gonzales
                              </a>
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
                              <a href="{{ route('profile') }}" style="color: black">
                                 Maria Gonzales
                              </a>
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
                              <a href="{{ route('profile') }}" style="color: black">
                                 Maria Gonzales
                              </a>
                           <span class="text-muted float-right">8:03 PM Today</span>
                           </span>
                           <p>
                              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="card-footer pl-1 pr-1 pb-1 pt-0">
                  <div class="row justify-content-center">
                     <div class="col-md-10">
                        <input type="text" placeholder="Tambahkan komentar..." class="input-comment" name="" id="">
                     </div>
                     <div class="col-md-2 p-0 text-left ">
                        <a class="btn-kirim-komentar" href="#">Kirim</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection