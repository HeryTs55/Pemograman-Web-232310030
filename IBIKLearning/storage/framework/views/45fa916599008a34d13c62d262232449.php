


<nav class="navbar navbar-expand-lg" style="background-color: var(--bg-main);"> 
    <div class="container"> 
        <a class="navbar-brand text-light fw-bold" href="/"> 
            IBIK Learning 
        </a> 
 
        <button class="navbar-toggler border-0" type="button" 
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" 
                aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> 
        </button> 
 
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center"> 
                <?php 
                    $navItems = [ 
                        'home' => 'Home', 
                        'product' => 'Product', 
                        'profile' => 'Profile', 
                    ]; 
                ?> 
 
                <?php $__currentLoopData = $navItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <li class="nav-item"> 
                        <a class="nav-link <?php echo e(request()->is($route) ? 'active-link' : 'text-light'); ?>" 
                           href="/<?php echo e($route); ?>"> 
                            <?php echo e($label); ?> 
                        </a> 
                    </li> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
 
                 
                <?php if(auth()->guard()->guest()): ?> 
                    <?php if(Route::has('login')): ?> 
                        <li class="nav-item ms-3"> 
                            <a class="btn btn-outline-light rounded-pill px-3" href="<?php echo e(route('login')); ?>"> 
                                Login 
                            </a> 
                        </li> 
                    <?php endif; ?> 
                <?php else: ?> 
                    <li class="nav-item dropdown ms-3"> 
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" 
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <?php echo e(Auth::user()->name); ?> 
                        </a> 
                        <ul class="dropdown-menu dropdown-menu-end"> 
                            <li> 
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" 
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                                    Logout 
                                </a> 
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none"> 
                                    <?php echo csrf_field(); ?> 
                                </form> 
                            </li> 
                        </ul> 
                    </li> 
                <?php endif; ?> 
            </ul> 
        </div> 
    </div> 
</nav> <?php /**PATH D:\Semester 4\Lab Pemrograman Web\Pertemuan 8\IBIKLearning_App\resources\views/templates/header.blade.php ENDPATH**/ ?>