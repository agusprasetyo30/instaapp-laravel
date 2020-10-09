@extends('layouts.app')

@section('title', 'InstaApp')

@push('css')
   <style>

   </style>
@endpush

@section('content')
   <div class="container">
      @if (!$posts->isEmpty())
         @foreach ($posts as $post)
            <div class="row justify-content-center">
               <div class="col-md-6 m-4">
                  <div class="card">
                     <div class="card-body p-0">
                        <!-- Nama akun dan avatar -->
                        <div class="user-content">
                           <img class="img-circle" src="{{ asset('storage/' . $post->users->avatar) }}" width="30px" height="30px" alt="User Avatar">
                           <a href="{{ route('user.profile', $post->users->username) }}"><span class="ml-2">{{ $post->users->name }}</span></a>
                        </div>
                        <!-- ./Nama akun dan avatar -->
                        <!-- Postingan gambar -->
                        <a href="{{ route('user.post.detail', ['username' => $post->users->username, 'id' => $post->id]) }}">
                           <div class="image-content">
                              <img src="{{ asset('storage/' . $post->image) }}" width="100%" alt="">
                           </div>
                        </a>
                        <!-- ./Postingan gambar -->
                        <!-- Konten like -->
                        <div class="like-content">
                           {{-- btn-danger --}}
                           {{-- <button class="btn btn-default border-0"><span class="fas fa-thumbs-up"></span> Like</button> --}}
                              <small class="text-muted" style="margin: 8px 4px 0px 0px">
                                 <span class="fas fa-thumbs-up"></span> 1,000 suka
                              </small>
                        </div>
                        <!-- ./Konten like -->
                        <!-- Body/Caption -->
                        <div class="content-body">
                           <b><a href="{{ route('user.profile', $post->users->username) }}"><span>{{ $post->users->username }}</span></a></b>
                           <span>{{ $post->content }}</span>
                        </div>
                        <!-- ./Body/Caption -->
                        <!-- Komentar -->
                        
                        
                        <div class="card-footer card-comments pl-3 pr-3 pt-2 pb-1">
                           @if (!$post->comments->isEmpty())
                              @foreach ($post->comments as $comment)
                                 <div class="card-comment">
                                    <!-- User image -->
                                    <img class="img-circle img-sm" src="{{ asset('storage/' . $comment->users->avatar) }}" alt="User Image">
                                    
                                    <div class="comment-text">
                                       <span class="username">
                                       {{ $comment->users->username }}
                                       <span class="text-muted float-right">{{ date('d/m/Y', strtotime($comment->created_at)) }}</span>
                                       </span>
                                       <p>
                                          {{ $comment->comment }}
                                       </p>
                                    </div>
                                 </div>
                              @endforeach
                           @endif
                        </div>
                        <div class="card-footer pl-1 pr-1 pb-1 pt-0">
                           <form action="{{ route('add-comment') }}" method="post">
                              @csrf
                              <div class="row justify-content-center">
                                 <div class="col-md-11">
                                    <input type="text" placeholder="Tambahkan komentar..." class="input-comment" name="comment" id="">
                                 </div>
                                 <div class="col-md-1 p-0 text-left ">
                                    <a class="btn-kirim-komentar" onclick="$(this).closest('form').submit()" href="#">Kirim</a>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <!-- ./Komentar -->
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
      @endif
   </div>
@endsection