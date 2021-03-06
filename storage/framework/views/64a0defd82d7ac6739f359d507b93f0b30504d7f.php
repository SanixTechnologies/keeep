<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title><?php echo e(config('app.name')); ?> | Admi Login</title>
  <link href="<?php echo e(asset(App\Model\SiteSetting::latest()->value('favicon'))); ?>" rel="icon">
  <link href="<?php echo e(asset(App\Model\SiteSetting::latest()->value('favicon'))); ?>" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin-assets/app-assets/css/vendors.css')); ?>">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin-assets/app-assets/css/app.css')); ?>">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin-assets/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin-assets/app-assets/css/core/colors/palette-gradient.css')); ?>">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin-assets/assets/css/style.css')); ?>">
  <!-- END Custom CSS-->
  <style type="text/css">
      <style type="text/css">
      .bg-cyan.bg-lighten-2 {
    background-image: linear-gradient(to left top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
}
  </style>
</head>
<body class="bg-cyan bg-lighten-2 vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body" style="margin-top: 150px;">
<br>
        <div class="col-md-3 col-8 m-auto p-0" style="position: absolute; right: 0;left: 0; top: 100px;">


             <?php if(isset($errors)&&count($errors) > 0): ?>


                    <div class="animated shake alert alert-dismissable alert-danger">
                         <ul class=" list-unstyled clearfix d-flex" style="margin: 0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li><strong><?php echo $error; ?></strong></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    </div>
            <?php endif; ?>
       
        </div>

        <div class="col-md-3 col-8 m-auto p-0" style="position: absolute; right: 0;left: 0; top: 100px;">


           <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
       
        </div>


        <section class="flexbox-containers">
        

          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-3 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                <div class="card-header border-0 pb-0" style="padding: 0">
                  <div class="card-title text-center">
                    <img style="max-height: 85px;" src="<?php echo e(asset(\App\Model\SiteSetting::latest()->value('logo'))); ?>" alt="<?php echo e(App\Model\SiteSetting::latest()->value('site_title')); ?>">
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Forget Password</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal" action="/admin/password/email" method="post">
                        <?php echo e(csrf_field()); ?>

                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="email" value="<?php echo e($email ?? old('email')); ?>" name="email" class="form-control form-control-lg" id="user-email" placeholder="Your Email Address"
                        required>
                        <div class="form-control-position">
                          <i class="ft-mail"></i>
                        </div>

                        <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>

                      </fieldset>
                      <button type="submit" class="btn btn-outline-primary btn-lg btn-block"><i class="ft-unlock"></i> Recover Password</button>
                    </form>
                  </div>
                </div>
                <div class="card-footer border-0 text-center">
                  <p class="text-center text-center"><a href="/admin/login" class="card-link">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="<?php echo e(asset('admin-assets/app-assets/vendors/js/vendors.min.js')); ?>" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="<?php echo e(asset('admin-assets/app-assets/vendors/js/forms/va')); ?>lidation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="<?php echo e(asset('admin-assets/app-assets/js/core/app-menu.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('admin-assets/app-assets/js/core/app.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('admin-assets/app-assets/js/scripts/customizer.js')); ?>" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="<?php echo e(asset('admin-assets/app-assets/js/scripts/forms/form-login-register.js')); ?>" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html><?php /**PATH D:\sanix\ios\resources\views/admin/auth/passwords/email.blade.php ENDPATH**/ ?>