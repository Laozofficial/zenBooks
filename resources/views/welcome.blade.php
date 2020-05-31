@extends('layouts.app')


@section('content')
    @include('layouts.nav')


<div class="" id="app">
	<div class="home">
		<div class="home_slider_container">

			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url({{ asset('images/annie-spratt-Mmi_sUHNazo-unsplash.jpg') }})"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Zaff Books.</div>
										<div class="home_slider_subtitle">A new kind of shopping experience For Books</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

        </div>
    </div>


          	<!-- Ads -->

	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url({{ asset('images/paul-schafer-t6oZEgL0z18-unsplash.jpg') }})"></div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						<img src="images/discount.png" alt="">
						<div>
							<div class="avds_discount">
								<div>20<span>%</span></div>
								<div>Discount</div>
							</div>
						</div>
					</div>
					<div class="avds_small_content">
						<div class="avds_title">Shop Easy </div>
						{{-- <div class="avds_link"><a href="categories.html">Start Now</a></div> --}}
					</div>
				</div>
			</div>
			<div class="avds_large">
				<div class="avds_background" style="background-image:url({{ asset('images/eugenio-mazzone-6ywyo2qtaZ8-unsplash.jpg') }})"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Browse , Find and Buy</div>
						<div class="avds_text">Check for the Book and buy one time and we would deliver it to your mail, it is that simple.</div>
						{{-- <div class="avds_link avds_link_large"><a href="categories.html">See All Products</a></div> --}}
					</div>
				</div>
			</div>
		</div>
    </div>


    	<!-- Products -->

	<div class="products mb-5">
		<div class="container">
            <h4 class="text-center">Buy Any Book You Like</h4>
            <br>
			<div class="row">
				<div class="col">

					<div class="product_grid">

                        @foreach ($books as $book)
                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="{{ url('/').'/uploads/'.$book->cover_image }}" alt="{{ $book->name }}" style="width:330px; height: 330px;"></div>
                                <div class="product_extra product_sale"><a href="/category/{{ $book->id }}">Hot</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="/get/book/{{ $book->id }}">{{ $book->name }}</a></div>
                                </div>
                            </div>
                            <br><br><br>
                        @endforeach

					</div>

				</div>
			</div>
		</div>
	</div>
<br><br><br>








</div>
    @include('layouts.footer')




    @section('scripts')
            <script src="{{ asset('https://cdn.jsdelivr.net/npm/vue/dist/vue.js') }}"></script>
            <script>
                new Vue({
                    el:'#app',
                    data: {
                        book: {},
                        src: `${base_url}/uploads/`,
                    },
                    mounted() {
                        console.log('welcome component mounted');
                    },
                    methods: {
                        getBookDetails(id){
                            let url = '/get/book/'+ id;
                            axios.get(url)
                                .then((response) =>{
                                    console.log(response);
                                    $('#exampleModal').modal('toggle');
                                    this.book = response.data.book
                                })
                                .catch((error) =>{
                                    console.log(error)
                                })
                        }
                    }
                })
            </script>
    @endsection
@endsection
