@extends('layouts.app')

@section('title', 's')

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
               
               <img src="{{ asset('storage/' . $post['image']) }}" width="100%" alt="">
            </div>
            <div class="col-md-5">
               {{-- <img class="img-circle" src="https://www.shareicon.net/data/512x512/2017/01/06/868320_people_512x512.png" width="40px" height="40px" alt="User Avatar"> --}}
               <img class="img-circle" src="{{ asset('storage/' . $user['avatar']) }}" width="40px" height="40px" alt="User Avatar">
               <a href="{{ route('user.profile', $user['username']) }}" style="color: black">
                  <span class="font-size-13 ml-2">
                     {{ $user['username'] }}
                  </span>
               </a>
               <hr>
               <div class="content-body" style="overflow: auto; height: 300px;">
                  <span>{{ $post['content'] }}</span>
                  
                  @if (!$comments->isEmpty())
                     @foreach ($comments as $comment)
                        <div class="card-footer card-comments mt-2 pl-3 pr-3 pt-2 pb-1">
                           <div class="card-comment">
                              <!-- User image -->
                              <img class="img-circle img-sm" src="{{ asset('storage/' . $comment->users->avatar) }}" alt="User Image">
                              
                              <!-- Komentar -->
                              <div class="comment-text">
                                 <span class="username">
                                    <a href="{{ route('user.profile', $comment->users->username) }}" style="color: black">
                                       {{ $comment->users->name }}
                                    </a>
                                 <span class="text-muted float-right">{{ date('d/m/Y', strtotime($comment->created_at)) }}</span>
                                 </span>
                                 <p>
                                    {{ $comment->comment }}
                                 </p>
                              </div>
                           </div>
                        </div>
                     @endforeach
                  @endif
               </div>

               <div class="card-footer pl-1 pr-1 pb-1 pt-0">
                  <div class="like-content">
                     {{-- btn-danger --}}
                     <button class="btn btn-default border-0"><span class="fas fa-thumbs-up"></span> Like</button>
                        <small class="float-right text-muted" style="margin: 8px 4px 0px 0px">
                           1,000 suka
                        </small>
                  </div>
                  <form action="{{ route('add-comment') }}" method="post">
                     @csrf
                     <div class="row justify-content-center">
                        <div class="col-md-10">
                           <input type="text" placeholder="Tambahkan komentar..." class="input-comment" name="comment" id="" required>
                           <input type="hidden" name="post_id" value="{{ $post['id'] }}">
                        </div>
                        <div class="col-md-2 p-0 text-left ">
                           <a class="btn-kirim-komentar" onclick="$(this).closest('form').submit()" href="#">Kirim</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection