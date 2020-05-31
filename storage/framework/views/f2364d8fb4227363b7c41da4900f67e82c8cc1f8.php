<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zen Books</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/bootstrap4/bootstrap.min.css')); ?>">
    <link href="<?php echo e(asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/main_styles.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/responsive.css')); ?>">

    <?php if( strpos(Request::url(), 'book') !== false && strpos(Request::url(), 'detail') !== false): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/product.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/product_responsive.css')); ?>">
    <?php endif; ?>

    <?php if( strpos(Request::url(), 'category') !== false): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/categories.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/categories_responsive.css')); ?>">
    <?php endif; ?>

    <?php if( strpos(Request::url(), 'buy-item') !== false): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/checkout.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/checkout_responsive.css')); ?>">
    <?php endif; ?>

    <?php if( strpos(Request::url(), 'contact' ) !== false): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/contact.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/contact_responsive.css')); ?>">
    <?php endif; ?>
    <?php echo $__env->yieldContent('styles'); ?>

</head>

<body>

    <div class="super_container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>



<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('styles/bootstrap4/popper.js')); ?>"></script>
<script src="<?php echo e(asset('styles/bootstrap4/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/greensock/TweenMax.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/greensock/TimelineMax.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/scrollmagic/ScrollMagic.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/greensock/animation.gsap.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/greensock/ScrollToPlugin.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/Isotope/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/easing/easing.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/parallax-js-master/parallax.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('js/product.js')); ?>"></script>
<script src="<?php echo e(asset('js/categories.js')); ?>"></script>
<script src="<?php echo e(asset('js/checkout.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/js/axios.min.js')); ?>"></script>
<script>
     const base_url = "<?php echo e(url('/')); ?>";
    //vex.defaultOptions.className = 'vex-theme-plain'
    axios.defaults.baseURL = base_url;
    axios.defaults.headers.common['X-CSRF-TOKEN'] = "<?php echo e(csrf_token()); ?>";
    axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
</script>
  <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Main-projects\zenBooks\resources\views/layouts/app.blade.php ENDPATH**/ ?>