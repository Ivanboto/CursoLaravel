<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-3">
            <img class="rounded-circle p-4" src="https://play-lh.googleusercontent.com/h9jWMwqb-h9hjP4THqrJ50eIwPekjv7QPmTpA85gFQ10PjV02CoGAcYLLptqd19Sa1iJ" width= 200px alt="">
        </div>
        <div class="col-9 pt-4">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1><?php echo e($user -> username); ?></h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong><?php echo e($user->posts->count()); ?></strong> posts</div>
                <div class="pr-5"><strong>250k</strong> followers</div>
                <div class="pr-5"><strong>300</strong> following</div>
            </div>
            <div class="pt-2 font-weight-bold"><?php echo e($user->profile->title); ?></div>
            <div><?php echo e($user->profile->description); ?></div>
            <div><a href="#"><strong><?php echo e($user->profile->url); ?></strong></a></div>
            
        </div>
    </div>
    <div class="row pt-5">
        <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4 pb-4"><img class="w-100" src="/storage/<?php echo e($post->image); ?>" alt=""></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ivanb\proyectolaravel\resources\views/profiles/index.blade.php ENDPATH**/ ?>