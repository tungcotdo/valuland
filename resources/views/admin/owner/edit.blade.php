@extends('layouts.admin')
@section('admin.main')

<div class="pagetitle">
    <h1>Sửa thông tin chủ nhà</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('admin.dashboad.index')}}">Trang chủ</a></li>
      <li class="breadcrumb-item"><a href="{{route('admin.owner.index')}}">Chủ nhà</a></li>
        <li class="breadcrumb-item active">Sửa thông tin</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Start owner -->
          <form class="col-12" action="{{route('admin.owner.update', $owner->owner_id)}}" id="admin-owner-store" method="POST">
            @csrf
            <div class="card">
              <div class="card-body">
                  <div class="row g-3">
                      <div class="col-md-6 validate">
                        <label for="owner_code" class="form-label">Căn</label>
                        <input type="text" class="form-control" id="owner_code" name="owner_code" value="{{$owner->owner_code}}">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-6 validate">
                        <label for="owner_name" class="form-label">Tên</label>
                        <input type="text" class="form-control" id="owner_name" name="owner_name" value="{{$owner->owner_name}}">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-6 validate">
                        <label for="owner_email" class="form-label">Email <small class="text-danger">(Ngăn cách bằng dấu ;)</small></label>
                        <input type="text" class="form-control" id="owner_email" name="owner_email" value="{{$owner->owner_email}}">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-6 validate">
                        <label for="owner_phone" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="owner_phone" name="owner_phone" value="{{$owner->owner_phone}}">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-6">
                        <label for="owner_demand" class="form-label">Nhu cầu</label>
                        <select id="owner_demand" class="form-select form-select w-100" name="owner_demand">
                          <option value="0">Không có</option>
                          <option value="1">Bán</option>
                          <option value="2">Thuê</option>
                        </select>
                      </div>
                  </div>
              </div>
            </div>

            <div class="text-center mt-4">
              <button type="submit" class="btn btn-primary me-3">Lưu thông tin</button>
            </div>
          </form><!-- End owner -->

        </div>
      </div><!-- End Left side columns -->

    </div>
</section>

@endsection

@section('admin.script')
  <script>
      Validator({
          form: '#admin-owner-store',
          rules: [
              Validator.tbRequired({
                  selector: '#owner_code',
                  submit: true
              }),
              Validator.tbRequired({
                  selector: '#owner_name',
                  submit: true
              }),
              Validator.tbRequired({
                  selector: '#owner_email',
                  submit: true
              }),
              Validator.tbRequired({
                  selector: '#owner_phone',
                  submit: true
              })
          ],
          onSubmit: (data) => {
              document.getElementById("modal__loading").style.display = "block";
              data.form.submit();
          }
      });
  </script>
@endsection