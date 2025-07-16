<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title><?php echo $__env->yieldContent('title', 'Bootcamp - IBIK'); ?></title> 
 
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" 
rel="stylesheet" 
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" 
crossorigin="anonymous"> 
     
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" 
rel="stylesheet"> 
 
     
    <link rel="stylesheet" href="<?php echo e(asset('css/colors.css')); ?>"> 
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>"> 
</head> 
<body> 
 
     
         
    <?php if(request()->is('admin/*')): ?> 
        <?php echo $__env->make('templates.admin-navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 
    <?php else: ?> 
        <?php echo $__env->make('templates.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 
    <?php endif; ?> 
 
     
    <div class="min-vh-100"> 
        <?php echo $__env->yieldContent('content'); ?> 
    </div> 
 
     
    <?php if(!request()->is('admin/*')): ?> 
        <?php echo $__env->make('templates.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 
    <?php endif; ?> 
 
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"> 
    </script> 
</body> 
</html><?php /**PATH D:\Semester 4\Lab Pemrograman Web\Pertemuan 8\IBIKLearning_App\resources\views/layouts/app.blade.php ENDPATH**/ ?>