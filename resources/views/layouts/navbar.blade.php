<div class="container-fluid p-0">
   <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="container">
         <a class="navbar-brand" href="#">InstaApp</a>
         <ul class="navbar-nav ml-auto">
            <!-- Pengguna -->
            <li class="nav-item dropdown" >
               <a class="nav-link" data-toggle="dropdown" href="#" >
                  {{-- <img class="img-circle" src="{{ asset('storage/' . \Auth::user()->avatar) }}" width="30px" height="30px" alt="User Avatar"> --}}
                  <img class="img-circle" src="https://www.shareicon.net/data/512x512/2017/01/06/868320_people_512x512.png" width="30px" height="30px" alt="User Avatar">
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <div class="card card-widget widget-user" style="margin-bottom: 0px">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-info">
                     <h3 class="widget-user-username">
                        {{-- @php
                           $kata = \Auth::user()->name;
                           // $kata = "Agus Prasetyo";
                        @endphp

                        @if (strlen($kata) > 16)
                           {{ substr($kata, 0, 16)}}
                        
                        @else
                           {{ $kata }}
                        @endif --}}
                        {{-- 123
                           {{-- <h5 class="widget-user-desc" style="font-size: 15px">{{ \Auth::user()->email }}</h5> --}}
                           {{-- <h5 class="widget-user-desc" style="font-size: 15px">aasd</h5> --}}
                        aaa</h3>
                  </div>
                  <div class="widget-user-image">
                     {{-- <img class="img-circle elevation-2" src="{{ asset('storage/' . \Auth::user()->avatar) }}" style="height: 100px; width: 100px" alt="User Avatar"> --}}
                     <img class="img-circle elevation-2" src="https://www.shareicon.net/data/512x512/2017/01/06/868320_people_512x512.png" style="height: 100px; width: 100px" alt="User Avatar">
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col-md-12 mt-3">
                           {{-- <form action="{{ route('logout') }}" method="post">
                              @csrf
                           </form> --}}
                           <a href="#" class="btn btn-sm btn-primary btn-block">Profile</a>
                           <input type="submit" class="btn btn-sm btn-danger btn-block" value="LOGOUT">
                        </div>
                        
                     </div>
                        <!-- /.col -->
                        
                  </div>
                     <!-- /.row -->
                  </div>
               </div>
            </li>
         </ul>
         {{-- <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Home</a>
         </div> --}}
      </div>
   </nav>
</div>