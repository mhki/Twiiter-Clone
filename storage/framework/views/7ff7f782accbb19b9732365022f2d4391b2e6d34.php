
<?php $__env->startSection('main'); ?>
<?php if(Auth::check()): ?>
<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

<a href="<?php echo e(url('/profile/' . $user->username)); ?>" class="list-group-item">

    <h4 class="list-group-item-heading">
        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" 
        fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg><?php echo e($user->name); ?>

    </h4>
    <p class="list-group-item-text">&#64;<?php echo e($user->username); ?> </p>
    <em>About</em>
    <p class="list-group-item-text"><?php echo e($user->about); ?> </p>

</a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
 -- No Users -- 
<?php endif; ?> 
<?php else: ?> 
<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">
        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" 
            fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg><?php echo e($user->name); ?>

    </h4>
    <p class="list-group-item-text">&#64;<?php echo e($user->username); ?> </p>
    <em>About</em>
    <p class="list-group-item-text"><?php echo e($user->about); ?> </p>
</a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
 --No Users--
<?php endif; ?> 
<h3 class="mt-2">Sign Up Today For More</h3>
<a href="/">
    <button class="btn btn-info">Sign Up</button>
</a>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\twitter-m\resources\views/tweets/show.blade.php ENDPATH**/ ?>