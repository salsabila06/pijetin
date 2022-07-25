
<div class="container">
    <div class="row">
        <div class="col-6">
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h1 class="mt-3"> Profile</h1>
            <ul class="list-group">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($data->first_name); ?></h5>
                        <h5 class="card-title"><?php echo e($data->last_name); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo e($data->id); ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo e($data->email); ?></h6>
                        <a href="<?php echo e(route('home')); ?>" class="card-link">Kembali</a>
                    </div>
                </div>
            </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ASUS\laravel\Project PijetIn\resources\views/Profile/Index.blade.php ENDPATH**/ ?>