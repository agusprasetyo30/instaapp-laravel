@extends('layouts.app')

@section('title', $user['username'] . " Post")

@push('css')
   <style>
      .font-size-13 {
         font-size: 13px;
      }

      .like-post {
         background: red;
         color: white;
      }

      .like-post:hover {
         background: red;
         color: white;
      }
   </style>
@endpush

@section('content')
   <div class="row justify-content-center m-4">
      <div class="col-md-8">
         <div class="row">
            <div class="col-md-7">
               <img src="{{ asset('storage/' . $post['image']) }}" width="100%" alt="">
               <div class="mt-2">
                  @if ($post['user_id'] == \Auth::user()->id)
                     <a href="{{ route('user.post.edit', ['username' => $user['username'], 'id' => $post['id']]) }}" class="font-size-13 text-muted m-2 "><i class="fas fa-pencil-alt"></i> Update Post</a>
                     <a href="{{ route('user.post.delete', ['username' => $user['username'], 'id' => $post['id']]) }}" class="font-size-13 text-muted m-2"><i class="fas fa-trash-alt"></i> Delete Post</a>
                  @endif
               </div>
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

               <div class="content-body {{ $post->comments->count() > 4 ? ' komentar-scroll' : ' komentar-normal' }}" >
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
                                    <span class="text-muted float-right">{{ date('d/m/Y', strtotime($comment->created_at)) }}
                                       @if ($comment->user_id == \Auth::user()->id)
                                          <div class="delete-comment text-muted text-right">
                                             <i class="fas fa-trash-alt"></i>
                                             <a href="{{ route('delete-comment', $comment->id) }}">Hapus</a>
                                          </div>
                                       @endif
                                    </span>
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
                     <!--cek keadaan sudah di like atau belum-->
                     {{-- @if (\Auth::user()->hasLiked($post)) --}}
                     <button id="like" class="btn border-0 btn-sm mt-1 {{ \Auth::user()->hasLiked($post) ? ' like-post' : '' }}">
                        @if (\Auth::user()->hasLiked($post))
                           <span class="fas fa-thumbs-down"></span> Tidak Disukai</button>

                        @else
                           <span class="fas fa-thumbs-up"></span> Disukai</button>
                        @endif
                        
                     <small class="float-right text-muted" style="margin: 8px 4px 0px 0px" >
                        <span id="like-count">{{ $post->likers()->count() }}</span> suka
                     </small>
                  </div>
                  <form action="{{ route('add-comment') }}" method="post">
                     @csrf
                     <div class="row justify-content-center">
                        <div class="col-md-10">
                           <input type="text" placeholder="Tambahkan komentar..." class="input-comment" name="comment" id="" required>
                           <input type="hidden" name="post_id" id="post_id" value="{{ $post['id'] }}">
                        </div>
                        <div class="col-md-2 p-0 text-left">
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

@push('js')
   <script>
      $(document).ready(function() {
         $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });

         $('#like').click(function() {
            var post_id = $('#post_id').val();
            var like_count = $('#like-count').text();
            var cObj = $(this);

            $.ajax({
               type:'POST',
               url:'/add-like',
               data:{id:post_id},
               success:function(data) {
                  if($(cObj).hasClass("like-post")){
                     $('#like-count').text(parseInt(like_count) - 1);
                     $('#like').html('<span class="fas fa-thumbs-up"></span> Disukai');
                     $(cObj).removeClass("like-post");

                  } else {
                     $('#like-count').text(parseInt(like_count) + 1);
                     $('#like').html('<span class="fas fa-thumbs-down"></span> Tidak Disukai');
                     $(cObj).addClass("like-post");
                  }
               }
            });
         });
      });
   </script>
@endpush