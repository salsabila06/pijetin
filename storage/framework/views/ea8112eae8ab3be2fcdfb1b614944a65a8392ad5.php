<?php $__env->startSection('title','Login'); ?>

<div class="title">
    <p>
        Login
    </p>
</div>


<div>
<form method="POST" action="/">
    <fieldset>
        <div>
            <input type="text" id="username" name="username" placeholder="username">
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="password">
        </div>
        <button type="submit" id="login-btn">Login</button>
        <div class="text">
            <p id="dont-have-account">
                Don't have account? <a href="<?php echo e(route('register-page')); ?>">register</a>
            </p>
            <p>
                <a id="forgot-pass" href="<?php echo e(route('reset')); ?>">Forgot password?</a>
            </p>
        </div>
    </fieldset>
</form>
</div>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <ul>
            <li>
                <?php echo e($dt->first_name); ?>

            </li>
        </ul>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




<?php echo $__env->make('Main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\laravel\belajar-laravel\resources\views/Login.blade.php ENDPATH**/ ?>