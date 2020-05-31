<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zen Books</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">

    @if( strpos(Request::url(), 'book') !== false && strpos(Request::url(), 'detail') !== false)
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/product.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/product_responsive.css') }}">
    @endif

    @if( strpos(Request::url(), 'category') !== false)
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/categories.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/categories_responsive.css') }}">
    @endif

    @if( strpos(Request::url(), 'buy-item') !== false)
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/checkout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/checkout_responsive.css') }}">
    @endif

    @if( strpos(Request::url(), 'contact' ) !== false)
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact_responsive.css') }}">
    @endif
    @yield('styles')

</head>

<body>

    <div class="super_container">
        @yield('content')
    </div>



<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/product.js') }}"></script>
<script src="{{ asset('js/categories.js') }}"></script>
<script src="{{ asset('js/checkout.js') }}"></script>
<script src="{{ asset('admin/assets/js/axios.min.js') }}"></script>
<script>
     const base_url = "{{ url('/') }}";
    //vex.defaultOptions.className = 'vex-theme-plain'
    axios.defaults.baseURL = base_url;
    axios.defaults.headers.common['X-CSRF-TOKEN'] = "{{ csrf_token() }}";
    axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
</script>
  @yield('scripts')
</body>

</html>
