<?php $__env->startSection('title', 'Создание новости'); ?>



<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('admin.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <?php echo e(__('Добавить новость')); ?>

                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.create')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="newsTitle">Заголовок новости</label>
                                <input type="text" name="title" id="newsTitle" class="form-control" value="<?php echo e(old('title')); ?>">
                            </div>

                            <div class="form-group">
                                <label for="newsCategory">Категория новости</label>
                                <select name="category" id="newsCategory" class="form-control">
                                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option <?php if($item['id'] == old('category')): ?> selected
                                                <?php endif; ?> value="<?php echo e($item['id']); ?>"><?php echo e($item['title']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <option value="0" selected>Нет категории</option>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="newsTitle">Описание новости</label>
                                <textarea class="form-control" p name="desc" id="newsDesc"  cols="30" rows="10"><?php echo e(old('desc')); ?></textarea>
                            </div>

                            <div class="form-check">
                                <input <?php if(old('isPrivate') == "1"): ?> checked <?php endif; ?> id="newsPrivate" name="isPrivate"
                                       type="checkbox" value="1" class="form-check-input">
                                <label for="newsPrivate">Приватная</label>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary" value="Добавить новость">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel.test\resources\views/admin/create.blade.php ENDPATH**/ ?>