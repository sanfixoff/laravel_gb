<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php $__env->startSection('title'); ?>Страница<?php echo $__env->yieldSection(); ?></title>
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
<?php echo $__env->yieldContent('menu'); ?>
<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\laravel\resources\views/layouts/main.blade.php ENDPATH**/ ?>