
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <h2>Tweets</h2>
        <?php $__currentLoopData = $tweets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tweet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="d-flex pt-3">

            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>

            <div class="accordion-item col-md-12">
                <h4 class="accordion-header" id="headingOne">
                    &#64;<?php echo e($tweet->name); ?>

                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     <?php echo e($tweet->text); ?>

                    </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">
                        <h4><?php echo e($tweet->text); ?></h4>
                        <?php if(Auth::id() == $tweet->user->id): ?>
                        <a class="btn btn-primary" href="/tweets/<?php echo e($tweet->id); ?>/edit">Edit Tweet</a>
                        <div class="offset-10">
                            <form action="/tweets/<?php echo e($tweet-> id); ?>/delete" method="POST">
                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger">Delete Tweet</button>
                            </form>
                        </div>
                        <?php endif; ?>
                        <div class="mt-2">
                            <h5>Add Comment</h5>
                        </div>

                        <div class="input-group mb-3 ">
                            <form action="/comments?tweetid=<?php echo e($tweet->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="text" class="form-control w-100" placeholder="Add comment" id="comment" name="text" maxlength="25" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button class="btn btn-primary mt-2">Add Comment</button> <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div><?php echo e($messsage); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </form>

                        </div>
                        <div class="">
                            <h5 class="offset-1">Comments</h5>
                            <?php $__empty_1 = true; $__currentLoopData = $tweet -> comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="d-flex text-muted pt-3 offset-1">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
                                <p class="pb-3 mb-0 small lh-sm border-bottom">
                                    <strong class="d-block text-gray-dark">&#64;<?php echo e($comment->user->name); ?> </strong> <?php echo e($comment->text); ?>

                                </p>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p class="offset-1">--No Comments Available--</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\twitter-m\resources\views/profile.blade.php ENDPATH**/ ?>