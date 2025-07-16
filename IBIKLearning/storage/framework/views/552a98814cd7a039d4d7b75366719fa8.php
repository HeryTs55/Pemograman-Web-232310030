 
 
<?php $__env->startSection('title', 'Admin - Courses'); ?> 
 
<?php $__env->startSection('content'); ?> 
    <div class="container py-5"> 
        <h2 class="mb-4">Create Course</h2> 
 
        <?php if($errors->any()): ?> 
            <div class="alert alert-danger"> 
                <strong>Whoops!</strong> Ada kesalahan saat mengisi form.<br><br> 
                <ul class="mb-0"> 
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <li><?php echo e($error); ?></li> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </ul> 
            </div> 
        <?php endif; ?> 
 
        <form 
            action="<?php echo e(route('admin.courses.store')); ?>" 
            method="POST" 
            enctype="multipart/form-data"> 
            <?php echo csrf_field(); ?> 
            <?php echo $__env->make('admin.courses.form', ['course' => null], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 
        </form> 
    </div> 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Semester 4\Lab Pemrograman Web\Pertemuan 8\IBIKLearning_App\resources\views/admin/courses/create.blade.php ENDPATH**/ ?>