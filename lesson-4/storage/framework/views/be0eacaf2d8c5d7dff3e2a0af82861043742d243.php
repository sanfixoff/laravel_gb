<li class="nav-item">
    <a class="nav-link<?php echo e(request()->routeIs('home')?' active':''); ?>" href="<?php echo e(route('home')); ?>">Главная</a>
</li>

<li class="nav-item">
    <a class="nav-link<?php echo e(request()->routeIs('admin.index')?' active':''); ?>" href="<?php echo e(route('admin.index')); ?>">Главная админка</a>
</li>

<li class="nav-item">
    <a class="nav-link <?php echo e(request()->routeIs('admin.test1')?' active':''); ?>" href="<?php echo e(route('admin.test1')); ?>">Скачать изображение</a>
</li>
<li class="nav-item">
    <a class="nav-link <?php echo e(request()->routeIs('admin.test2')?' active':''); ?>" href="<?php echo e(route('admin.test2')); ?>">Скачать текст</a>
</li>
<li class="nav-item">
    <a class="nav-link <?php echo e(request()->routeIs('admin.create')?' active':''); ?>" href="<?php echo e(route('admin.create')); ?>">Добавить новость</a>
</li>
<?php /**PATH C:\OSPanel\domains\laravel.test\resources\views/admin/menu.blade.php ENDPATH**/ ?>