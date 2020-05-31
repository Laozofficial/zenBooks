@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/product.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/product_responsive.css') }}">
@endsection

@section('content')
    @include('layouts.nav')




	<div class="home">
		<div class="home_container">
            <div class="home_background" style="background-image:url({{ asset('images/categories.jpg') }})"></div>
            {{-- <div class="home_background" style="background-image:url({{ url('/').'/uploads/'.$category->image }})"></div> --}}
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">{{ $book->name }}<span>.</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>


@endsection