@extends('admin.layouts.app')


@section('content')

    @include('admin.layouts.sidenav')
      <div class="main-content" id="panel">
          
        @include('admin.layouts.nav')

        
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Bot</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/index') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Admin</li>
                            </ol>
                        </nav>
                        </div>
                      
                    </div>
                    </div>
                </div>
            </div>

          

            
      </div>

    
@endsection
@section('script')
<script src="{{ asset('admin/assets/js/vue-bot-page.js') }}"></script>
@endsection
  
