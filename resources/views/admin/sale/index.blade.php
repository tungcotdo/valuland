@extends('layouts.admin')
@section('admin.main')
        <div class="pagetitle">
        <h1>Thống kê số liệu</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item active">Thống kê</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
            <div class="row">
                <!-- Sales Card -->
                <div class="col-xxl-3 col-md-6">
                <div class="card info-card sales-card">

                    <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                        <h6>Lọc</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                        <li><a class="dropdown-item" href="#">Tháng này</a></li>
                        <li><a class="dropdown-item" href="#">Năm nay</a></li>
                    </ul>
                    </div>

                    <div class="card-body">
                    <h5 class="card-title">Bán <span>| Hôm nay</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                        </div>
                        <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">tăng</span>

                        </div>
                    </div>
                    </div>

                </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-3 col-md-6 mt-4 mt-md-0">
                <div class="card info-card revenue-card">

                    <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                        <h6>Lọc</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                        <li><a class="dropdown-item" href="#">Tháng này</a></li>
                        <li><a class="dropdown-item" href="#">Năm nay</a></li>
                    </ul>
                    </div>

                    <div class="card-body">
                    <h5 class="card-title">Doanh thu <span>| Tháng này</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                        <h6>30 tỷ</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">tăng</span>

                        </div>
                    </div>
                    </div>

                </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-3 col-xl-12 mt-4 mt-xl-0">

                <div class="card info-card customers-card">

                    <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                        <h6>Lọc</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                        <li><a class="dropdown-item" href="#">Tháng này</a></li>
                        <li><a class="dropdown-item" href="#">Năm nay</a></li>
                    </ul>
                    </div>

                    <div class="card-body">
                    <h5 class="card-title">Khách hàng <span>| Năm nay</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">giảm</span>

                        </div>
                    </div>

                    </div>
                </div>

                </div><!-- End Customers Card -->

                <!-- Customers Card -->
                <div class="col-xxl-3 col-xl-12 mt-4 mt-xl-0">

                <div class="card info-card customers-card">

                    <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                        <h6>Lọc</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                        <li><a class="dropdown-item" href="#">Tháng này</a></li>
                        <li><a class="dropdown-item" href="#">Năm nay</a></li>
                    </ul>
                    </div>

                    <div class="card-body">
                    <h5 class="card-title">Khách hàng <span>| Năm nay</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">giảm</span>

                        </div>
                    </div>

                    </div>
                </div>

                </div><!-- End Customers Card -->
            </div>
            </div>

            <!-- Left side columns -->
            <div class="col-lg-9 mt-4">
            <div class="row">
                <!-- Top sale -->
                <div class="col-12">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="sale-raw-tab" data-bs-toggle="tab" data-bs-target="#sale-raw" type="button" role="tab" aria-controls="sale-raw" aria-selected="true">Dữ liệu bán sơ</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sale-select-tab" data-bs-toggle="tab" data-bs-target="#sale-select" type="button" role="tab" aria-controls="sale-select" aria-selected="false">Dữ liệu bán tinh</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="sale-raw" role="tabpanel" aria-labelledby="sale-raw-tab">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col" class="small">MÃ CĂN</th>
                                    <th scope="col" class="small">CẬP NHẬT BỞI</th>
                                    <th scope="col" class="small">THỜI GIAN CẬP NHẬT</th>
                                    <th scope="col" class="small">HÀNH ĐỘNG</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">P101S01</th>
                                    <td>Hoàng Bích</td>
                                    <td>12:06 7/8/2024</td>
                                    <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="bi bi-eye small"> Xem chi tiết</i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="tab-pane fade" id="sale-select" role="tabpanel" aria-labelledby="sale-select-tab">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col" class="small">MÃ CĂN</th>
                                    <th scope="col" class="small">GIÁ</th>
                                    <th scope="col" class="small">DT_TT(M2)</th>
                                    <th scope="col" class="small">LOẠI CĂN</th>
                                    <th scope="col" class="small">LOẠI HÌNH</th>
                                    <th scope="col" class="small">CẬP NHẬT BỞI</th>
                                    <th scope="col" class="small">THỜI GIAN CẬP NHẬT</th>
                                    <th scope="col" class="small">HÀNH ĐỘNG</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">P101S01</th>
                                    <td>2905 tỷ</td>
                                    <td>62,4</td>
                                    <td>2PN</td>
                                    <td>Mới CĐT</td>
                                    <td>Hoàng Bích</td>
                                    <td>12:06 7/8/2024</td>
                                    <td>
                                    <a href="sale-transaction.html" class="btn btn-sm btn-success"><i class="bi bi-cursor small"> Giao dịch</i></a>
                                    <a href="sale-edit.html" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square small"> Sửa</i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash small"> Xóa</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">P101S01</th>
                                    <td>2905 tỷ</td>
                                    <td>62,4</td>
                                    <td>2PN</td>
                                    <td>Mới CĐT</td>
                                    <td>Hoàng Bích</td>
                                    <td>12:06 7/8/2024</td>
                                    <td>
                                    <a href="sale-transaction.html" class="btn btn-sm btn-success"><i class="bi bi-cursor small"> Giao dịch</i></a>
                                    <a href="sale-edit.html" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square small"> Sửa</i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash small"> Xóa</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">S1021821</th>
                                    <td>2905 tỷ</td>
                                    <td>62,4</td>
                                    <td>2PN</td>
                                    <td>CN HĐMB</td>
                                    <td>Hoàng Bích</td>
                                    <td>12:06 7/8/2024</td>
                                    <td>
                                    <a href="sale-transaction.html" class="btn btn-sm btn-success"><i class="bi bi-cursor small"> Giao dịch</i></a>
                                    <a href="sale-edit.html" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square small"> Sửa</i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash small"> Xóa</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">S1021822</th>
                                    <td>2905 tỷ</td>
                                    <td>62,4</td>
                                    <td>2PN</td>
                                    <td>CN HĐMB</td>
                                    <td>Hoàng Bích</td>
                                    <td>12:06 7/8/2024</td>
                                    <td>
                                    <a href="sale-transaction.html" class="btn btn-sm btn-success"><i class="bi bi-cursor small"> Giao dịch</i></a>
                                    <a href="sale-edit.html" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square small"> Sửa</i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash small"> Xóa</i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
                </div><!-- End Top sale -->

                <!-- Top rent -->
                <div class="col-12 mt-4">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="rent-raw-tab" data-bs-toggle="tab" data-bs-target="#rent-raw" type="button" role="tab" aria-controls="rent-raw" aria-selected="true">Dữ liệu thuê sơ</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rent-select-tab" data-bs-toggle="tab" data-bs-target="#rent-select" type="button" role="tab" aria-controls="rent-select" aria-selected="false">Dữ liệu thuê tinh</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="rent-raw" role="tabpanel" aria-labelledby="rent-raw-tab">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col" class="small">MÃ CĂN</th>
                                    <th scope="col" class="small">CẬP NHẬT BỞI</th>
                                    <th scope="col" class="small">THỜI GIAN CẬP NHẬT</th>
                                    <th scope="col" class="small">HÀNH ĐỘNG</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">P101S01</th>
                                    <td>Hoàng Bích</td>
                                    <td>12:06 7/8/2024</td>
                                    <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="bi bi-eye small"> Xem chi tiết</i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="tab-pane fade" id="rent-select" role="tabpanel" aria-labelledby="rent-select-tab">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col" class="small">MÃ CĂN</th>
                                    <th scope="col" class="small">GIÁ</th>
                                    <th scope="col" class="small">DT_TT(M2)</th>
                                    <th scope="col" class="small">LOẠI CĂN</th>
                                    <th scope="col" class="small">LOẠI HÌNH</th>
                                    <th scope="col" class="small">CẬP NHẬT BỞI</th>
                                    <th scope="col" class="small">THỜI GIAN CẬP NHẬT</th>
                                    <th scope="col" class="small">HÀNH ĐỘNG</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">P101S01</th>
                                    <td>2905 tỷ</td>
                                    <td>62,4</td>
                                    <td>2PN</td>
                                    <td>Mới CĐT</td>
                                    <td>Hoàng Bích</td>
                                    <td>12:06 7/8/2024</td>
                                    <td>
                                    <a href="sale-transaction.html" class="btn btn-sm btn-success"><i class="bi bi-cursor small"> Giao dịch</i></a>
                                    <a href="sale-edit.html" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square small"> Sửa</i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash small"> Xóa</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">P101S01</th>
                                    <td>2905 tỷ</td>
                                    <td>62,4</td>
                                    <td>2PN</td>
                                    <td>Mới CĐT</td>
                                    <td>Hoàng Bích</td>
                                    <td>12:06 7/8/2024</td>
                                    <td>
                                    <a href="sale-transaction.html" class="btn btn-sm btn-success"><i class="bi bi-cursor small"> Giao dịch</i></a>
                                    <a href="sale-edit.html" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square small"> Sửa</i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash small"> Xóa</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">S1021821</th>
                                    <td>2905 tỷ</td>
                                    <td>62,4</td>
                                    <td>2PN</td>
                                    <td>CN HĐMB</td>
                                    <td>Hoàng Bích</td>
                                    <td>12:06 7/8/2024</td>
                                    <td>
                                    <a href="sale-transaction.html" class="btn btn-sm btn-success"><i class="bi bi-cursor small"> Giao dịch</i></a>
                                    <a href="sale-edit.html" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square small"> Sửa</i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash small"> Xóa</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">S1021822</th>
                                    <td>2905 tỷ</td>
                                    <td>62,4</td>
                                    <td>2PN</td>
                                    <td>CN HĐMB</td>
                                    <td>Hoàng Bích</td>
                                    <td>12:06 7/8/2024</td>
                                    <td>
                                    <a href="sale-transaction.html" class="btn btn-sm btn-success"><i class="bi bi-cursor small"> Giao dịch</i></a>
                                    <a href="sale-edit.html" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square small"> Sửa</i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash small"> Xóa</i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
                </div><!-- End Top rent -->

            </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-3 mt-4">
            <!-- Recent Activity -->
            <div class="card">
                <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
                </div>

                <div class="card-body">
                <h5 class="card-title">Vừa cập nhật</h5>

                <div class="activity">

                    <div class="activity-item d-flex">
                    <div class="activite-label small">32 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content small">
                        <b>Lụa</b> gửi thông báo tăng giá S102.1821 từ 2 tỷ lên 3 tỷ
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label small">56 min</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content small">
                        <b>Hoàng Bích</b> cập nhật S102.1821 có nhu cầu bán
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label small">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content small">
                        <b>Ngọc</b> cập nhật S102.1822 có nhu cầu thuê
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label small">1 day</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content small">
                        <b>Thăng</b> cập nhật S102.1822 đã bán
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label small">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content small">
                        <b>Ngọc</b> cập nhật S102.1820 đã cho thuê
                    </div>
                    </div><!-- End activity item-->

                </div>

                </div>
            </div><!-- End Recent Activity -->
            </div><!-- End Right side columns -->

        </div>
        </section>
@endsection