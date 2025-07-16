<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> 
    <div class="container-fluid"> 
        <a class="navbar-brand" href="<?php echo e(url('/admin/courses')); ?>"> 
            Admin Panel - <?php echo e(config('app.name', 'Laravel')); ?> 
        </a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>"> 
            <span class="navbar-toggler-icon"></span> 
        </button> 
 
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
             
            <ul class="navbar-nav me-auto"> 
                 
            </ul> 
 
             
            <ul class="navbar-nav ms-auto"> 
                <?php if(auth()->guard()->check()): ?> 
                    <li class="nav-item dropdown"> 
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" 
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <?php echo e(Auth::user()->name); ?> 
                        </a> 
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> 
                            <a class="dropdown-item" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                            </form>
                        </div> 
                    </li> 
                <?php endif; ?> 
            </ul> 
        </div> 
    </div> 
</nav><?php /**PATH D:\Semester 4\Lab Pemrograman Web\Pertemuan 8\IBIKLearning_App\resources\views/templates/admin-navbar.blade.php ENDPATH**/ ?>