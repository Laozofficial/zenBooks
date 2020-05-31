 <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand text-primary" href="/">
          <i class="fa fa-leaf text-primary"></i> Zeff
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav active">
            <li class="nav-item ">
                  <a class="nav-link <?php echo e((request()->is('admin/index')) ? 'active' : ''); ?>" href="<?php echo e(url('/admin/index')); ?>" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-tachometer-alt text-primary"></i>
                    <span class="nav-link-text">Dashboard</span>
                  </a>
                </li>
                  <li class="nav-item ">
                  <a class="nav-link <?php echo e((request()->is('admin/books')) ? 'active' : ''); ?>" href="<?php echo e(url('/admin/books')); ?>" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-clock text-primary"></i>
                    <span class="nav-link-text">Books</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link <?php echo e((request()->is('admin/payments')) ? 'active' : ''); ?>" href="<?php echo e(url('/admin/payments')); ?>" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-columns text-primary"></i>
                    <span class="nav-link-text">Payments</span>
                  </a>
                </li>
              <li class="nav-item ">
                  <a class="nav-link <?php echo e((request()->is('admin/profile')) ? 'active' : ''); ?>" href="<?php echo e(url('/admin/profile')); ?>" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-user text-primary"></i>
                    <span class="nav-link-text">Admin Profile</span>
                  </a>
                </li>
                 
                
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <form action="/logout" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden">
                <button type="submit" style="background-color: transparent;border: none;padding:0; margin:0">
                  <a class="nav-link" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="ni ni-user-run text-primary"></i> 
                    <span class="nav-link-text">Logout</span>
                  </a>
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav><?php /**PATH C:\xampp\htdocs\Main-projects\zenBooks\resources\views/admin/layouts/sidenav.blade.php ENDPATH**/ ?>