<?php $__env->startSection('title', 'Новости'); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h2>Новости</h2>
    <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <a href="<?php echo e(route('news.show', $item['id'])); ?>"><?php echo e($item['title']); ?></a><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>Нет новостей</p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel.test\resources\views/news/index.blade.php ENDPATH**/ ?>