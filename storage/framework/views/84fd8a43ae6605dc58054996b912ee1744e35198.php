
<?php $__env->startSection('main'); ?>

<h3>Edit Tweet</h3>

<form action="/tweets/<?php echo e($tweet->id); ?>/edit" method="POST">
    <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
    <div>
        Edit Tweet(25 Characters Long)
    </div>
    <div>
        <input class="form-control" name="text" id="tweet-text" type="text" value="<?php echo e($tweet->text); ?>">

    </div>
    <div>
        <button class="btn btn-primary" type="submit">
            Edit Tweet
        </button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\twitter-m\resources\views/tweets/edit.blade.php ENDPATH**/ ?>