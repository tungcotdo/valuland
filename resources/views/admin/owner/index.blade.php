@extends('layouts.admin')
@section('admin.main')
<div class="pagetitle">
  <h1>Danh sách chủ nhà</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
      <li class="breadcrumb-item"><a href="owner.html">Chủ nhà</a></li>
      <li class="breadcrumb-item active">Danh sách</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card-btns">
  <a href="{{route('admin.owner.form-upload-excel')}}" class="btn btn-sm btn-success"><i class="bi bi-upload"></i> Tải file excel</a>
  <!-- <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-download"></i> Xuất file excel</a> -->
  <a href="{{route('admin.owner.add')}}" class="btn btn-sm btn-primary"><i class="bi bi-plus-lg"></i> Thêm mới</a>
  <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Xóa hết dữ liệu</a>
</div>

<!-- Filter -->
<div class="card">
  <div class="accordion-item p-3">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed py-2 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <i class="bi bi-filter-left"> Bộ lọc</i>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse show mt-3" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
      <form class="row g-3">
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label small">Căn</label>
          <input type="text" class="form-control form-control-sm" id="validationDefault05" required="">
        </div>
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label small">Tên</label>
          <input type="text" class="form-control form-control-sm" id="validationDefault05" required="">
        </div>
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label small">Điện thoại</label>
          <input type="text" class="form-control form-control-sm" id="validationDefault05" required="">
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label small">Nhu cầu</label>
          <select class="form-control form-control-sm">
            <option>Không có</option>
            <option>Bán</option>
            <option>Thuê</option>
          </select>
        </div>
        <div class="col-12">
          <button class="btn btn-sm btn-secondary" type="submit">Áp dụng lọc</button>
        </div>
      </form>
    </div>
  </div>

</div>
<!-- End filter -->

<section class="section mt-3">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Start owner -->
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <div class="card-filter">

              </div>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" class="small">#</th>
                    <th scope="col" class="small">Căn</th>
                    <th scope="col" class="small">Tên</th>
                    <th scope="col" class="small">Điện thoại</th>
                    <th scope="col" class="small">Nhu cầu</th>
                    <th scope="col" class="small">HÀNH ĐỘNG</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>P101S01</td>
                    <td>Khuất Tiến Thành</td>
                    <td>0966628838</td>
                    <td>
                      <select class="form-control form-control-sm">
                        <option>Không có</option>
                        <option>Bán</option>
                        <option>Thuê</option>
                      </select>
                    </td>
                    <td>
                      <a href="owner-edit.html" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square small"> Sửa</i></a>
                      <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash small"> Xóa</i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div><!-- End owner -->

      </div>
    </div><!-- End Left side columns -->

  </div>
</section>
@endsection