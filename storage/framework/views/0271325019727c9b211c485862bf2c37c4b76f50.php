<div class = 'alert alert-success'>
   <p>Time check: <?php echo e(\Carbon\Carbon::now()); ?></p>
</div>

    <?php if(count($errors) > 0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class = 'alert alert-danger'>
                <?php echo e($error); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class = 'alert alert-success'>
            <?php echo e('success'); ?>

        </div>
    <?php endif; ?>
    
    <?php if(session('error')): ?>
        <div class = 'alert alert-danger'>
            <?php echo e('success'); ?>

        </div>
    <?php endif; ?>