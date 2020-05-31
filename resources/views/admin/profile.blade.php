@extends('admin.layouts.app')


@section('content')

    @include('admin.layouts.sidenav')
      <div class="main-content" id="panel">
          
        @include('admin.layouts.nav')
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url({{ asset('admin/assets/img/theme/unsplashed.jpg') }}); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello {{ Auth::user()->name }}</h1>
            <p class="text-white mt-0 mb-5">This is Your Profile , Please feel free to make changes and update your account details</p>
            
          </div>
        </div>
      </div>
    </div>



  <div class="container-fluid mt--6">
         

      <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">{{ Auth::user()->name }} Profile</h3>
                </div>
              </div>
        </div>
        <!-- Card body -->
        <div class="card-body">
             @if( session('success') )
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
                    <span class="alert-text"><strong>whoops ! </strong> {{ session('success') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                 {{--  @if( session('error') )
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
                    <span class="alert-text"><strong>whoops ! </strong> {{ session('error') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif  --}}
                  @if( session('error') )
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
                    <span class="alert-text"><strong>whoops ! </strong> {{ session('error') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
            <div class="row">
                <div class="col-md-6">
           <div class="card card-profile">
            <img src="{{ asset('admin/assets/img/theme/img-1-1000x600.jpg') }}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  {{--  <a href="#">
                    @if(Auth::user()->avatar == '')
                     <img src="{{ url('/').'/uploads/'.'user.png' }}" alt="{{ Auth::user()->name }}" class="rounded-circle">
                    @else
                     <img src="{{ url('/').'/uploads/'.Auth::user()->avatar }}" alt="{{ Auth::user()->name }}"  class="rounded-circle">
                    @endif
                  </a>  --}}
                </div>
              </div>
            </div>
          </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <h1 class="text-primary large mb-0 mr-0">Name </h1> <span class="ml-0 mb-3 text-small">{{ Auth::user()->name }}</span>
                        <hr>
                        <h1 class="text-primary large mb-0 mr-0">Email </h1> <span class="ml-0 mb-3 text-small">{{ Auth::user()->email }}</span> 
                        <hr>
                       
                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary mb-0 mr-0"><i class="fa fa-spinner"></i> Change password</button> 
                    </div>
                </div>
            </div>
        </div>
      </div>
    


     <div class="card mt-4">
         <div class="card-header">
             <h3>Update Profile information</h3>
         </div>
         <div class="card-body">
              
             <form action="/admin/profile" method="POST" enctype="multipart/form-data">
                @csrf
                {{--  @include('admin.partials.alerts')  --}}
                 <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Name</label>
                        <input type="text" id="input-city" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ Auth::user()->name }}">
                        @error('name')
                                <span class="invalid-feedback" >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Email</label>
                        <input type="email" name="email" id="input-country" class="form-control  @error('email') is-invalid @enderror" placeholder="Email"  value="{{ Auth::user()->email }}">
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>
                    {{--  <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-control-label" for="input">Phone Number</label>
                        <input type="number" id="input" class="form-control  @error('phone') is-invalid @enderror" placeholder="Phone Number" name="phone" value="{{ Auth::user()->phone_number }}">
                        @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>  --}}

                     {{--  <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-control-label" for="input">Change Your Avatar</label>
                           <div class="custom-file">
                              <input type="file" name="avatar" class="custom-file-input" id="customFileLang" lang="en">
                              <label class="custom-file-label" for="customFileLang">Select Avatar</label>
                            </div>
                        </div>
                      </div>  --}}
                  
                  </div>
                  

                    <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i> Submit</button>
                    </form>
         </div>
     </div>

     <br>
     {{--  <div class="card">
         <div class="card-header">
             <h3>Update Profile image</h3>
         </div>
         <div class="card-body">
            
         </div>
     </div>  --}}
     

      </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
        <form class="" action="/admin/update/password" method="POST">
            @csrf
            <input class="form-control mt-3" type="password" name="old_password" placeholder="Old Password"/>
            <input class="form-control mt-3" type="password" name="new_password" placeholder="New Password"/>
            <button class="btn btn-primary mt-3" type="submit">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection