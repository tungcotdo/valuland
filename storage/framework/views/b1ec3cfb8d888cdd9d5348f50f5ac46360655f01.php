<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" id="csrf-token"/>

  <title>Valuland</title>

  <!-- Favicons -->
  <link href="<?php echo e(asset('admin/img/valuland-favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('admin/img/valuland-favicon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('admin/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/simple-datatables/style.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet">

  <!-- Form CSS File -->
  <link href="<?php echo e(asset('form/modal.css')); ?>" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center ps-3">
        <img width="100" src="<?php echo e(asset('admin/img/valuland-Logo.png')); ?>" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <?php if( !empty( $_notifications ) ): ?>
          <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-danger badge-number"><?php echo e(count($_notifications)); ?></span>
            </a><!-- End Notification Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <li class="dropdown-header">
                Bạn có <?php echo e(count($_notifications)); ?> thông báo
                <a href="<?php echo e(route('admin.notification.index')); ?>"><span class="badge rounded-pill bg-primary p-2 ms-2">Xem tất cả</span></a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              
                <?php $__currentLoopData = $_notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="notification-item">
                  <i class="bi bi-exclamation-circle text-warning text-danger"></i>
                  <div>
                    <h4><?php echo e($value->notification_title); ?></h4>
                    <p><?php echo e($value->notification_content); ?></p>
                  </div>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
              <li class="dropdown-footer">
                <a href="<?php echo e(route('admin.notification.index')); ?>">Xem tất cả các thông báo</a>
              </li>
            </ul><!-- End Notification Dropdown Items -->

          </li><!-- End Notification Nav -->
        <?php endif; ?>
        
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo e(Auth::user()->email); ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('logout')); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Đăng Xuất</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End Sidebar-->

  <!-- ======= Main ======= -->
  <main id="main" class="main">
    <?php if(Session::has('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php echo e(Session::get('error')); ?>

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php elseif(Session::has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo e(Session::get('success')); ?>

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    
    <?php echo $__env->yieldContent('admin.main'); ?>
  </main>
  <!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Modal loading page -->
    <div class="modal" id="modal__loading">
        <div class="modal__overlay"></div>
        <div class="modal__content">
            <div class="modal__loading">
                <div class="modal__loading-icon"></div>
                <div class="modal__loading-text">Đang xử lý ...</div>
            </div>
        </div>
    </div>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('admin/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/chart.js/chart.umd.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/echarts/echarts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/quill/quill.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/simple-datatables/simple-datatables.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/tinymce/tinymce.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('admin/js/main.js')); ?>"></script>

  <!-- Form JS File -->
  <script src="<?php echo e(asset('form/function.js')); ?>"></script>

  <?php echo $__env->yieldContent('admin.script'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel8valuland\resources\views/layouts/admin.blade.php ENDPATH**/ ?>