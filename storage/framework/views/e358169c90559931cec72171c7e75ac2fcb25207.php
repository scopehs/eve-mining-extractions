<?php $__env->startSection('title'); ?>login
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <form class="theme-form login-form">
                        <h4>Moon Extraction - Login</h4>
                        <h6>Log to view your moon extractions</h6>
                        <div class="form-group">
                            <ul class="login-social">
                                <li>
                                    <a href="<?php echo e(route('login_with_eve')); ?>"><img src="<?php echo e(asset('assets/images/eve/eve-sso-login-black-large.png')); ?>"></a>
                                </li>
                            </ul>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

	
    <?php $__env->startPush('scripts'); ?>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/scopeh.co.uk/calendar.mindstar.technology/resources/views/auth/login.blade.php ENDPATH**/ ?>