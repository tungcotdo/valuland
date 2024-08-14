<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Valuland</title>

  <!-- Favicons -->
  <link href="{{asset('admin/img/favicon.png')}}" rel="icon">
  <link href="{{asset('admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">

  <!-- Form CSS File -->
  <link href="{{asset('form/modal.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center ps-3">
        <img width="100" src="{{asset('admin/img/valuland-Logo.png')}}" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-danger badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Bạn có 2 thông báo
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Xem tất cả</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning text-danger"></i>
              <div>
                <h4>S102.1821 hết hạn thuê</h4>
                <p>Hạn 01/08/2024</p>
                <p>Còn 7 ngày</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>S102.1822 cập nhật giá bán</h4>
                <p>Cũ 3 tỷ</p>
                <p>Mới 3.2 tỷ</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning text-danger"></i>
              <div>
                <h4>S102.1821 hết hạn thuê</h4>
                <p>Hạn 01/08/2024</p>
                <p>Còn 7 ngày</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>S102.1822 cập nhật giá bán</h4>
                <p>Cũ 3 tỷ</p>
                <p>Mới 3.2 tỷ</p>
              </div>
            </li>
            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning text-danger"></i>
              <div>
                <h4>S102.1821 hết hạn thuê</h4>
                <p>Hạn 01/08/2024</p>
                <p>Còn 7 ngày</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>S102.1822 cập nhật giá bán</h4>
                <p>Cũ 3 tỷ</p>
                <p>Mới 3.2 tỷ</p>
              </div>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>S102.1822 cập nhật giá bán</h4>
                <p>Cũ 3 tỷ</p>
                <p>Mới 3.2 tỷ</p>
              </div>
            </li>
            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning text-danger"></i>
              <div>
                <h4>S102.1821 hết hạn thuê</h4>
                <p>Hạn 01/08/2024</p>
                <p>Còn 7 ngày</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>S102.1822 cập nhật giá bán</h4>
                <p>Cũ 3 tỷ</p>
                <p>Mới 3.2 tỷ</p>
              </div>
            </li>
            <li class="dropdown-footer">
              <a href="#">Xem tất cả các thông báo</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->email}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
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
  @include('admin.partials.sidebar')
  <!-- End Sidebar-->

  <!-- ======= Main ======= -->
  <main id="main" class="main">
    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ Session::get('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ Session::get('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    @yield('admin.main')
  </main>
  <!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Modal loading page -->
  <div class="modal" id="modal__loading">
      <div class="modal__overlay"></div>
      <div class="modal__content">
          <div class="loader"></div>
          <div class="loading__title">Đang xử lý ...</div>
      </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{asset('admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('admin/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('admin/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('admin/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('admin/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin/js/main.js')}}"></script>

  <!-- Form JS File -->
  <script src="{{asset('form/function.js')}}"></script>

  @yield('admin.script')
</body>

</html>