<li class="nav-item">
    <a class="nav-link<?php echo e(request()->routeIs('home')?' active':''); ?>" href="<?php echo e(route('home')); ?>">Главная</a>
</li>

<li class="nav-item">
    <a class="nav-link<?php echo e(request()->routeIs('news.index')?' active':''); ?>" href="<?php echo e(route('news.index')); ?>">Новости</a>
</li>

<li class="nav-item">
    <a class="nav-link <?php echo e(request()->routeIs('news.category.index')?' active':''); ?>" href="<?php echo e(route('news.category.index')); ?>">Категории</a>
</li>

<li class="nav-item">
    <a class="nav-link <?php echo e(request()->routeIs('admin.index')?' active':''); ?>" href="<?php echo e(route('admin.index')); ?>">Админка</a>
</li>
<?php /**PATH C:\OSPanel\domains\laravel.test\resources\views/menu.blade.php ENDPATH**/ ?>