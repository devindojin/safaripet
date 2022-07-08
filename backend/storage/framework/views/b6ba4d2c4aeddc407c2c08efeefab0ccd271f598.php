 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?php echo e(asset('admin/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Safari Stan's Pet Center</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('admin/img/user2-160x160.png')); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block"><?php echo e(Auth::user()->name); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo e(url('dashboard')); ?>" class="nav-link <?php echo e(request()->is('dashboard') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo e(url('manage-pages')); ?>" class="nav-link <?php echo e(request()->is('manage-pages') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Pages
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo e(url('manage-menu')); ?>" class="nav-link <?php echo e(request()->is('manage-menu') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Menu Builder
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pinogy app
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('pinogy-settings/1/edit')); ?>" class="nav-link <?php echo e(request()->is('pinogy-settings/1/edit') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pinogy settings</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('pet-images')); ?>" class="nav-link <?php echo e(request()->is('pet-images') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pet images</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo e(url('manage-testimonials')); ?>" class="nav-link <?php echo e(request()->is('manage-testimonials') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Client Testimonials
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo e(url('settings')); ?>" class="nav-link <?php echo e(request()->is('settings') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview menu-open">
            <a href="<?php echo e(route('getInstagramFeedSetting')); ?>" class="nav-link <?php echo e(request()->is('getInstagramFeedSetting') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Instagram Feed
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo e(route('script-settings-views')); ?>" class="nav-link <?php echo e(request()->is('script-settings-views') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Script Settings
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH /Users/donaldmethus/Sites/safaripet/backend/resources/views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>