 
 
<?php $__env->startSection('Admin - Courses'); ?> 
 
<?php $__env->startSection('content'); ?> 
    <div class="container py-5"> 
        <div class="d-flex justify-content-between align-items-center mb-4"> 
            <h2 class="mb-0">All Courses</h2> 
            <a href="<?php echo e(route('admin.courses.create')); ?>" class="btn btn-success">+ Create New</a> 
        </div> 
 
        <?php if(session('success')): ?> 
            <div class="alert alert-success"> 
                <?php echo e(session('success')); ?> 
            </div> 
        <?php endif; ?> 
 
        <table class="table table-hover align-middle"> 
            <thead> 
                <tr> 
                    <th>#</th> 
                    <th>Title</th> 
                    <th>Instructor</th> 
                    <th>Category</th> 
                    <th>Students</th> 
                    <th>Rating</th> 
                    <th>Action</th> 
                </tr> 
            </thead> 
            <tbody> 
                <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
                    <tr> 
                        <td><?php echo e($loop->iteration); ?></td> 
                        <td><?php echo e($course->title); ?></td> 
                        <td><?php echo e($course->instructor); ?></td> 
                        <td><?php echo e($course->category); ?></td> 
                        <td><?php echo e($course->students); ?></td> 
                        <td><?php echo e($course->rating); ?></td> 
                        <td> 
                            <a 
                                href="<?php echo e(route('admin.courses.edit', $course->id)); ?>" 
                                class="btn btn-sm btn-warning">Edit</a> 
                            <form 
                                action="<?php echo e(route('admin.courses.destroy', $course->id)); ?>" 
                                method="POST" 
                                class="d-inline" 
                                onsubmit="return confirm('Are you sure?');"> 
                                <?php echo csrf_field(); ?> 
                                <?php echo method_field('DELETE'); ?> 
                                <button class="btn btn-sm btn-danger">Delete</button> 
                            </form> 
                        </td> 
                    </tr> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                    <tr> 
                        <td colspan="7" class="text-center">No courses found.</td> 
                    </tr> 
                <?php endif; ?> 
            </tbody> 
        </table> 
    </div> 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Semester 4\Lab Pemrograman Web\Pertemuan 8\IBIKLearning_App\resources\views/admin/courses/index.blade.php ENDPATH**/ ?>