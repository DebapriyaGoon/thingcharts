<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="icon" href="img/favicon.ico">-->

    <title>INSPINIA - Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="<?php echo asset('css/animate.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo asset('css/font-awesome.min.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo asset('css/style.css'); ?>" rel="stylesheet">
    
</head>
<body id="page-top">
    <?php echo $__env->make('layouts.topnavbarhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <?php echo $__env->make('layouts.footerhome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- <script src="<?php echo asset('js/custom.js'); ?>" type="text/javascript"></script> -->
<script src="<?php echo asset('js/jquery-2.1.1.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/pace.min.js'); ?>"></script>
<script src="<?php echo asset('js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo asset('js/classie.js'); ?>"></script>
<script src="<?php echo asset('js/cbpAnimatedHeader.js'); ?>"></script>
<script src="<?php echo asset('js/wow.min.js'); ?>"></script>
<script src="<?php echo asset('js/inspinia.js'); ?>"></script>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->yieldSection(); ?>

</body>
</html>
