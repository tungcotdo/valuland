@extends('layouts.admin')
@section('admin.main')
<div class="pagetitle">
      <h1>Danh sách hợp đồng</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="notification.html">hợp đồng</a></li>
          <li class="breadcrumb-item active">Danh sách</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Start contract -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">

                  <div class="card-btns">
                    <a href="{{route('admin.contract.add')}}" class="btn btn-sm btn-primary"><i class="bi bi-plus-lg"></i> Thêm mới</a>
                  </div>

                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Hành động</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Hợp đồng mua nhà</td>
                        <td>Hợp đồng nhà</td>
                        <td>
                          <a href="https://cdn.thuvienphapluat.vn/phap-luat/2022-2/NHPT/hop-dong-thue-nha.png" class="btn btn-sm btn-info"><i class="bi bi-folder2-open"></i> Xem</a>
                          <a href="notification-edit.html" class="btn btn-sm btn-success"><i class="bi bi-cloud-download"></i> Tải xuống</a>
                          <a href="notification-edit.html" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Sửa</a>
                          <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Xóa</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Hợp đồng thuê</td>
                        <td>Hợp đồng thuê</td>
                        <td>
                          <a href="https://cdn.thuvienphapluat.vn/phap-luat/2022-2/NHPT/hop-dong-thue-nha.png" class="btn btn-sm btn-info"><i class="bi bi-folder2-open"></i> Xem</a>
                          <a href="notification-edit.html" class="btn btn-sm btn-success"><i class="bi bi-cloud-download"></i> Tải xuống</a>
                          <a href="notification-edit.html" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Sửa</a>
                          <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Xóa</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div><!-- End raw -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>
@endsection