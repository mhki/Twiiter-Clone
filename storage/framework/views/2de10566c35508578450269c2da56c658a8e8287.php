

<?php $__env->startSection('main'); ?>
    <h3>Create Tweet</h3>

    <form action="/tweets/create" method="POST">
        <?php echo csrf_field(); ?>
    <div>
        Tweet(25 Characters Long)
    </div>
    <div>
        <textarea class="form-control" name="text" id="tweet-text"></textarea>
    </div>
    <div>
        <button class="btn btn-primary" type="submit">
            Add Tweet
        </button>
    </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\twitter-m\resources\views/tweets/create.blade.php ENDPATH**/ ?>