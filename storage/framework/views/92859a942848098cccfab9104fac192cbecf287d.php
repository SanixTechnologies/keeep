<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="/admin">
              <img style="max-height:30px;" class="brand-logo" alt="stack admin logo" src="<?php echo e(asset(\App\Model\SiteSetting::latest()->value('logo'))); ?>">
              <h2 class="brand-text"><?php echo e(App\Model\SiteSetting::latest()->value('site_title')); ?></h2>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            

          </ul>
          <ul class="nav navbar-nav float-right">
            
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="<?php echo e(Auth::guard('admin')->user()->avatar?asset(Auth::guard('admin')->user()->avatar):asset('admin-assets/app-assets/images/portrait/small/avatar-s-1.png')); ?>" alt="avatar"><i></i></span>
                <span class="user-name"> <?php echo e(Auth::guard('admin')->user()->name); ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="/admin/profile"><i class="ft-user"></i> Edit Profile</a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('admin.logout.post')); ?>"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
</nav><?php /**PATH /home/sanixu9b/public_html/app/resources/views/admin/layouts/header.blade.php ENDPATH**/ ?>