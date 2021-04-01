<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.css'); ?>">

</head>
<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="nav-scroller bg--body shadow-sm">
        <nav class="nav nav-underline" aria-label="Secondary navigation">
        
            <a class="nav-link" href="<?php echo e(route('home')); ?>"><?php echo e(Auth::user()->name); ?></a>
            
            <a class="nav-link" href="/explore">
                Tweets
                <span class="badge bg-primary text-light rounded-pill align-text-bottom"><?php echo e($tweet_count); ?></span>
            </a>
            <a class="nav-link" href="/following">
                Following
                <span class="badge bg-primary text-light rounded-pill align-text-bottom"><?php echo e($following_count); ?></span>
            </a>
            <a class="nav-link" href=" <?php echo e(url('/profile/'. $user->username.'/followers')); ?>">
                Followers
                <span class="badge bg-primary text-light rounded-pill align-text-bottom"><?php echo e($followers_count); ?></span>
            </a>
        
            
            <?php if(Auth::check()): ?>
            <a class="nav-link" href="/tweets/create">Tweet</a>
            <?php endif; ?>
            <a href="<?php echo e(url('/logout')); ?>" class="nav-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout </a>
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
                
                
        </nav>
    </div>
    <div class="container">

        <div class="d-flex pt-3">
            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
            <a href="<?php echo e(url('/profile/'.$user->username)); ?>" class="">
                <h4 class="list-group-item-heading"><?php echo e($user->name); ?> </h4>
                <p class="list-group-item-text">&#64;<?php echo e($user->username); ?> </p>
            </a>
            
        </div>
        <div class="mr-5"><h4><em>About</em></h4>
            <em><?php echo e($user->about); ?></em>
        </div>
        <div class="offset-4 col-md-2">
            <?php if(Auth::check()): ?>
                <?php if($is_edit_profile): ?>
                <a href="#" class="navbar-btn navbar-right">
                    <button type="button" class="btn btn-primary">Edit Profile</button>
                </a>
                <?php elseif($is_follow_button): ?>
                <a href="<?php echo e(url('/follows/profile/' . $user->username)); ?>" class="navbar-btn navbar-right">
                    <button type="button" class="btn btn-success">Follow</button>
                </a>
                <?php else: ?>
                <a href="<?php echo e(url('/unfollows/profile/' . $user->username)); ?>" class="navbar-btn navbar-right">
                    <button type="button" class="btn btn-success">Unfollow</button>
                </a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Scripts -->
    <script src="<?php echo asset('js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo asset('js/app.js'); ?>"></script>


</body>
</html><?php /**PATH C:\twitter-m\resources\views/layouts/profile.blade.php ENDPATH**/ ?>