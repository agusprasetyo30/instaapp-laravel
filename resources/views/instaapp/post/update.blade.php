@extends('layouts.app')

@section('title', $user['username'] . " | Update Post")

@section('content')
   {{-- Cek apakah ini postingan milik pengguna atau tidak --}}
   <div class="row justify-content-center m-4">
      <div class="col-md-8">
         <form action="{{ route('user.post.update', ['username' => $user['username'], 'id' => $post['id'] ]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
               <div class="col-md-7">
                  <img src="{{ asset('storage/' . $post['image']) }}" width="100%" alt="">
                  <input type="file" name="photo" class="form-control mt-2" style="font-size: 13px">
               </div>
               <div class="col-md-5">
                  <label style="font-size: 12px" for="caption">Caption</label>
                  <textarea style="font-size: 12px" class="form-control" name="caption" id="caption" cols="30" rows="4" placeholder="Masukan caption . . .">{{ $post['content'] }}</textarea>
                  <button type="submit" class="btn btn-sm btn-block btn-primary mt-2">
                     <i class="fas fa-pencil-alt mr-1"></i>
                     Update
                  </button>
               </div>
            </div>
         </form>
      </div>
   </div>


@endsection