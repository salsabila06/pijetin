<?php $__env->startSection('title','Login'); ?>

<div class="title">
    <p>
        Login
    </p>
</div>

<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('success')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<?php if(session()->has('loginError')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('loginError')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div>
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <fieldset>
            <div>
                <input type="text" id="first_name" name="first_name" placeholder="first_name" autofocus required>
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="password" required>
            </div>
            <button type="submit" id="login-btn">Login</button>
            <div class="text">
                <p id="dont-have-account">
                    Don't have account? <a href="<?php echo e(route('register-page')); ?>">register</a>
                </p>
                <p>
                    <a id="forgot-pass" href="<?php echo e(route('forgot')); ?>">Forgot password?</a>
                </p>
            </div>
        </fieldset>
    </form>
</div>





<?php echo $__env->make('Main.Index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\laravel\belajar-laravel\resources\views/Login/Index.blade.php ENDPATH**/ ?>