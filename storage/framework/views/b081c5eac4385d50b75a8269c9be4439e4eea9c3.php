<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA - <?php echo $__env->yieldContent('title'); ?> </title>


    <link rel="stylesheet" href="<?php echo asset('css/vendor.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/custom_styles.css'); ?>" />
    <!-- <link rel="stylesheet" href="<?php echo asset('css/fontawesome-all.css'); ?>" /> -->

    <link href="<?php echo asset('css/steps/jquery.steps.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('js/iconpicker/iconpicker.css'); ?>" />
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        <?php echo $__env->make('layouts.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            <?php echo $__env->make('layouts.topnavbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Main view  -->
            <?php echo $__env->yieldContent('content'); ?>

            <!-- Footer -->
            <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->
<script src="<?php echo asset('js/app.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/iconpicker/iconpicker.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/steps/jquery.steps.min.js'); ?>"></script>


<script src="<?php echo asset('js/custom.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/jspdf.min.js'); ?>" type="text/javascript"></script>

<script src="<?php echo asset('js/html2canvas.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/canvas2image.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/base64.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/canvas2image.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/FileSaver.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/canvas-toBlob.js'); ?>" type="text/javascript"></script>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->yieldSection(); ?>

</body>
</html>
