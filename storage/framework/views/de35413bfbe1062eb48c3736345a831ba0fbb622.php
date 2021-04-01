<header class="d-flex flex-column flex-md-row align-items-center
 p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
 
  <p class="h5 my-0 me-md-auto fw-normal">tWIttER-m</p>
  <nav class="my-2 my-md-0 me-md-3">
    <?php if( !Auth::check()): ?>
    <a class="p-2 text-dark" href="/">Login</a>
    <?php else: ?>
    <a class="p-2 text-dark" href="<?php echo e(route('home')); ?>"><?php echo e(Auth::user()->name); ?></a>
    <?php endif; ?>
    <a class="p-2 text-dark" href="/explore">Explore</a>
    <a class="p-2 text-dark" href="/profiles">Profiles</a>
  </nav>

</header><?php /**PATH C:\twitter-m\resources\views/partials/header.blade.php ENDPATH**/ ?>