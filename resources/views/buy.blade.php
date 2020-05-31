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




<div class="product_details">
		<div class="container">

   














			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="{{ url('/').'/uploads/'.$book->cover_image }}" alt=""><div class="product_extra product_new"><a>New</a></div></div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name">{{ $book->name }}</div>
						{{--  <div class="details_discount">&#8358 100</div>  --}}
						<div class="details_price">&#8358 {{ number_format($book->price) }}</div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>In Stock</span>
						</div>
						<div class="details_text">
							<p>{{ $book->description }}.</p>
						</div>

                        <!-- Product Quantity -->
                        {{--  <form method="GET" action="/buy-item/{{ $book->id }}">  --}}
                        <form method="GET" action="#">
                            @csrf
                            <div class="product_quantity_container">
                                 <script src="{{ asset('https://js.paystack.co/v1/inline.js') }}"></script>
                                    {{--  <button class="newsletter_button trans_200"  type="button" name="pay_now" id="pay-now" title="Pay now"  onclick="saveOrderThenPayWithPaystack()"><span>Buy Book</span></button>  --}}
                                    <button class="newsletter_button trans_200" data-toggle="modal" data-target="#exampleModal" type="submit"><span>Buy Book</span></button>
                            </form>
						</div>

						<!-- Share -->
						{{-- <div class="details_share">
							<span>Share:</span>
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div> --}}
					</div>
				</div>
			</div>

			<div class="row description_row">
				{{--  <div class="col">
					<div class="description_title_container">
						<div class="description_title">Description</div>
					</div>
					<div class="description_text">
						<p>{{ $book->description }}.</p>
					</div>
				</div>  --}}
			</div>
		</div>
	</div>



       <!-- Modal running on vue js-->
       <div  id="app">
            <div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control" v-model="email" />
                        <br>
                        <button v-on:click="payWithPaystack({{ $book->id }})" class="mt-4 newsletter_button trans_200" type="submit"><span><i class="fa fa-credit-card-alt"></i> Pay Now</span></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>


    @include('layouts.footer')

@endsection
@section('scripts')
<script src="{{ asset('https://cdn.jsdelivr.net/npm/vue/dist/vue.js') }}"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/vue-checkout.js') }}"></script>
<script>
    new Vue({
        el:'#app',
        data: {
            email: null
        },
        mounted() {

        },
        methods: {
            payWithPaystack(id){
                var handler = PaystackPop.setup({
                key: 'pk_test_1f212c820f129376877470b80a80c4196b3de99a',
                email: this.email,
                amount: {{ $book->price*100 }},
                currency: "NGN",
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [
                        {
                            display_name: "Mobile Number",
                            variable_name: "mobile_number",
                            value: "+2348012345678"
                        }
                    ]
                },
                callback: (response) =>{
                    //alert('success. transaction ref is ' + response.reference);
                    swal("Thanks for the purchase", "Please wait while we send your book to your email");
                    var url = '/get/book/file/'+ id
                    console.log(url + ' '+ this.email)
                    axios.post(url,{
                        email: this.email,
                        book_id: {{ $book->id }},
                        txnId: response.reference,
                        amount: {{ $book->price }},
                        description: 'A successful payment for the  {{ $book->name }} book',
                        type: 'paystack',
                        status: 'successful'

                    })
                    .then((response) =>{
                        console.log(response)
                        swal("Payment Successful", "Please Check Your email and Download your Book","success")
                        setTimeout(() => {
                            window.location.href = "{{ url('/') }}";
                        },3000)
                    })
                    .catch((error) =>{
                        console.log(error)
                        swal("Something went wrong", "Please Bear with us , our engineers are fixing it","error")
                    })                    
                },
                onClose: function(){
                    alert('window closed');
                }
                });
                handler.openIframe();
            }
        }
    })
</script>
@endsection
