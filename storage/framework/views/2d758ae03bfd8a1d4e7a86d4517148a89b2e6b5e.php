

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    Followers
                </div>

                <div class="panel-body">
                    <div class="list-group">
                    <?php $__empty_1 = true; $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $followers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <a href="<?php echo e(url('/profile/'. $followers->username)); ?>" class="list-group-item">
                        
                        <h4 class="list-group-item-heading"><svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" 
                        height="32" xmlns="http://www.w3.org/2000/svg" role="img" 
                        aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" 
                        fill="#6f42c1" dy=".3em">32x32</text></svg><?php echo e($followers->name); ?> </h4>
                        <p class="list-group-item-text">&#64;<?php echo e($followers->username); ?> </p>
                        <p class="list-grou-item-text"><em>About</em></p>
                        <?php echo e($followers->about); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>No users</p>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\twitter-m\resources\views/followers.blade.php ENDPATH**/ ?>