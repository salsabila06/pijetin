<?php $__env->startSection('title','Login'); ?>
<div class="title">
    <p>
        Login
    </p>
</div>
<form method="POST" action="#">
    <fieldset>
        <div>
            <input type="text" id="username" name="username" placeholder="username">
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="password">
        </div>
        <button type="button" id="login-btn">Login</button>
        <div class="text">
            <p id="dont-have-account">
                Don't have account? <a href="<?php echo e(url('/Register')); ?>">register</a>
            </p>
            <p>
                <a id="forgot-pass" href="<?php echo e(url('/Reset')); ?>">Forgot password?</a>
            </p>
        </div>
    </fieldset>
</form>


<?php echo $__env->make('Main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\laravel\belajar-laravel\resources\views/login.blade.php ENDPATH**/ ?>