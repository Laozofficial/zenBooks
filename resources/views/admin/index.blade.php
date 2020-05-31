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

          
            <div class="container-fluid mt--6">
                <div class="card">
                    <div class="card-header">
                        Dashboard
                    </div>
                    <div class="card-body">
                        <div class="container">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Book has been successfully added') }}
                                </div>
                            @endif
                           <div class="row">
                               <div class="col-md-6">
                                    <form action="/admin/index" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <lable for="name" class="col-md-3">Book Name </lable>
                                            <div class="col-md-9 mb-4">
                                                <input class="form-control form-control-sm" type="text" id="name" name="name" placeholder="Book Title" value="{{ old('name') }}"/>
                                                @error('name')
                                                    <span class="text-danger" >
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <lable for="isbn" class="col-md-3">Book ISBN  </lable>
                                            <div class="col-md-9 mb-4">
                                                <input class="form-control form-control-sm" type="text" name="isbn" id="isbn" placeholder="Book ISBN" value="{{ old('isbn') }}"/>
                                                @error('isbn')
                                                    <span class="text-danger" >
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <br>
                                            <lable for="cover_image" class="col-md-3">Book Cover Image </lable>
                                            <div class="col-md-9 mb-4">
                                                 <input type="file" name="file" id="fileuploadInput" accept=".png, .jpg, .jpeg" required>
                                                @error('file')
                                                    <span class="text-danger" >
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                             <br>
                                            <lable for="book" class="col-md-3">Book Content </lable>
                                            <div class="col-md-9 mb-4">
                                                 <input type="file" name="book" id="fileuploadInput" accept=".pdf, .docx" required>
                                                @error('book')
                                                    <span class="text-danger" >
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                             <br>
                                            <lable for="price" class="col-md-3">Book Price </lable>
                                            <div class="col-md-9 mb-4">
                                                <input class="form-control form-control-sm" name="price" type="text" id="price" placeholder="Book Price" value="{{ old('price') }}"/>
                                                  @error('price')
                                                    <span class="text-danger" >
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                             <br>
                                            <lable for="price" class="col-md-3">Book Description </lable>
                                            <div class="col-md-9 mb-4">
                                                <textarea class="form-control" name="description" row="9"></textarea>
                                                 @error('description')
                                                    <span class="text-danger" >
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                             <br>
                                            <lable for="format" class="col-md-3">Book Format</lable>
                                            <div class="col-md-9 mb-4">
                                                <input class="form-control form-control-sm" type="text" id="format" name="format" placeholder="Book Format......eg PDF" value="{{ old('format') }}"/>
                                                 @error('format')
                                                    <span class="text-danger" >
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                             <br>
                                            <lable for="author" class="col-md-3">Book Author</lable>
                                            <div class="col-md-9 mb-4">
                                                <input class="form-control form-control-sm" type="text" id="author" name="author" placeholder="Book Author's Name" value="{{ old('author') }}"/>
                                                 @error('author')
                                                    <span class="text-danger" >
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <button class="btn btn-primary mt-3" type="submit"><i class="fa fa-paper-plane"></i> Submit Book</button>
                                    </form>
                               </div>
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
  
