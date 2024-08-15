@extends('layouts.admin')
@section('admin.main')
    <div class="pagetitle">
      <h1>Form sửa dữ liệu bán</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Trang chủ</a></li>
          <li class="breadcrumb-item active">Sửa dữ liệu bán</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Start col-lg-12 -->
            <form class="col-lg-12" action="{{route('admin.sale.update', $sale->sale_id)}}" method="POST">
              @csrf  
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title py-0">Thông tin chung</h5>
                    <div class="row g-3">
                      <div class="col-md-4">
                        <label for="code" class="form-label small">Mã căn</label>
                        <input type="text" class="form-control form-control-sm" id="code" name="code" value="{{$sale->code}}">
                      </div>
                      <div class="col-md-4 validate">
                        <label for="owner_name" class="form-label-sm">Tên chủ hộ</label>
                        <input type="text" class="form-control form-control-sm" id="owner_name" name="owner_name" value="{{$sale->owner_name}}">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-4 validate">
                        <label for="owner_email" class="form-label-sm">Email chủ hộ<small class="text-danger"> (Ngăn cách bằng dấu ;)</small></label>
                        <input type="text" class="form-control form-control-sm" id="owner_email" name="owner_email" value="{{$sale->owner_email}}">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-4 validate">
                        <label for="owner_phone" class="form-label-sm">Điện thoại chủ hộ</label>
                        <input type="text" class="form-control form-control-sm" id="owner_phone" name="owner_phone" value="{{$sale->owner_phone}}">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-4">
                        <label for="sale_subdivision" class="form-label small">Phân khu</label>
                        <input type="text" class="form-control form-control-sm" id="sale_subdivision" name="sale_subdivision" value="{{$sale->sale_subdivision}}">
                      </div>
                      <div class="col-md-4">
                        <label for="sale_building" class="form-label small">Tòa</label>
                        <input type="email" class="form-control form-control-sm" id="sale_building" name="sale_building" value="{{$sale->sale_building}}">
                      </div>
                      <div class="col-md-4">
                        <label for="sale_floor" class="form-label small">Tầng</label>
                        <input type="email" class="form-control form-control-sm" id="sale_floor" name="sale_floor" value="{{$sale->sale_floor}}">
                      </div>
                      <div class="col-md-4">
                        <label for="sale_stype" class="form-label small">Loại căn hộ</label>
                        <select class="form-control form-control-sm" id="sale_stype" name="sale_stype">
                          @if( !empty( $house->_STYLE ) )
                            @foreach( $house->_STYLE as $value => $text )
                              <option value="{{ $value }}">{{ $text }}</option>
                            @endforeach
                          @endif
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label for="sale_direction" class="form-label small">Hướng</label>
                        <select class="form-control form-control-sm" id="sale_direction" name="sale_direction">
                          @if( !empty( $house->_DIRECTION ) )
                            @foreach( $house->_DIRECTION as $value => $text )
                              <option value="{{ $value }}">{{ $text }}</option>
                            @endforeach
                          @endif
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label for="sale_navigable_area" class="form-label small">DT thông thủy</label>
                        <input type="text" class="form-control form-control-sm" id="sale_navigable_area" name="sale_navigable_area" value="{{$sale->sale_navigable_area}}">
                      </div>
                      <div class="col-md-4">
                        <label for="sale_price" class="form-label small">Giá bán</label>
                        <input type="text" class="form-control form-control-sm" id="sale_price" name="sale_price" value="{{$sale->sale_price}}">
                      </div>
                      <div class="col-md-12">
                        <label for="sale_description" class="form-label small">Mô tả</label>
                        <textarea class="form-control form-control-sm" name="sale_description" id="sale_description">{{$sale->sale_description}}</textarea>
                      </div>
                    </div>
                </div> <!-- end card-body -->
              </div> <!-- end card -->

              <div class="card mt-3">
                <div class="card-body">
                    <!-- Images -->
                    <div class="col-md-12">
                      <a href="sale-add.html" class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-plus-lg"></i> Thêm mới ảnh</a>
                      <div class="row g-2" id="sale-img">
                        @foreach( $sale_imgs as $value )
                          <div class="col-lg-2">  
                              <div class="card">
                                  <div class="card-body text-center">
                                      <a onclick="return confirm('Bạn có muốn xóa ảnh này không?')"  href="{{route('admin.media.sale-delete', $value->sale_img_id)}}" class="btn btn-sm btn-danger sale-img-delete"><i class="small bi bi-trash"> Xóa</i> </a>
                                  </div>
                                  <a href="{{asset($value->sale_img_path)}}" class="card-img-link" target="_blank"><img class="card-img-top rounded-0" src="{{asset($value->sale_img_path)}}" alt="Card image cap"></a>
                              </div>
                          </div>
                        @endforeach
                      </div>
                    </div>
                    <!-- End Images -->
                </div> <!-- end card-body -->
              </div> <!-- end card -->

              <div class="text-center my-5">
                <button type="submit" class="btn btn-primary me-3">Lưu dữ liệu</button>
              </div>
            </form><!-- End col-lg-12 -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

    <!-- Upload IMG Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tải ảnh căn hộ</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{route('admin.media.sale-upload', $sale->sale_id)}}" id="house-img-form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-auto validate">
                        <input class="form-control" type="file" id="house-image-input" name="photos[]" multiple>
                        <small class="error-message text-danger"></small>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" id="house-image-save">Lưu</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div><!-- End Upload IMG Modal-->

    @section('admin.script')
    <script>

      document.querySelectorAll('.sale-img-delete').forEach(btn => {
        btn.addEventListener('click', () => {
          document.getElementById("modal__loading").style.display = "block";
        })
      });

      Validator({
          form: '#house-img-form',
          rules: [
              Validator.file({
                  required: true,
                  selector: '#house-image-input',
                  extension: ['png','jpg'],
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

@endsection