
<?php $__env->startSection('admin.main'); ?>
    <div class="pagetitle">
      <h1>Form sửa dữ liệu thuê</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Trang chủ</a></li>
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.rent.raw')); ?>">Danh sách thuê sơ</a></li>
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.rent.select')); ?>">Danh sách thuê tinh</a></li>
          <li class="breadcrumb-item active">Sửa dữ liệu thuê</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Start col-lg-12 -->
            <form class="col-lg-12" action="<?php echo e(route('admin.rent.update', $rent->rent_id)); ?>" method="POST" id="admin-rent-edit">
              <?php echo csrf_field(); ?>  
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title py-0">Thông tin chung</h5>
                    <div class="row g-3">
                      <div class="col-md-4 validate">
                        <label for="code" class="form-label-sm">Mã căn<small class="text-danger"> *</small></label>
                        <input type="text" class="form-control form-control-sm" id="code" name="code" value="<?php echo e($rent->code); ?>">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-4 validate">
                        <label for="owner_name" class="form-label-sm">Tên chủ hộ <small class="text-danger"> *</small></label>
                        <input type="text" class="form-control form-control-sm" id="owner_name" name="owner_name" value="<?php echo e($rent->owner_name); ?>">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-4 validate">
                        <label for="owner_email" class="form-label-sm">Email chủ hộ (Ngăn cách bằng dấu ;)<small class="text-danger"> *</small></label>
                        <input type="text" class="form-control form-control-sm" id="owner_email" name="owner_email" value="<?php echo e($rent->owner_email); ?>">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-4 validate">
                        <label for="owner_phone" class="form-label-sm">Điện thoại chủ hộ <small class="text-danger"> *</small></label>
                        <input type="text" class="form-control form-control-sm" id="owner_phone" name="owner_phone" value="<?php echo e($rent->owner_phone); ?>">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-4">
                        <label for="rent_subdivision" class="form-label-sm">Phân khu</label>
                        <input type="text" class="form-control form-control-sm" id="rent_subdivision" name="rent_subdivision" value="<?php echo e($rent->rent_subdivision); ?>">
                      </div>
                      <div class="col-md-4">
                        <label for="rent_building" class="form-label-sm">Tòa</label>
                        <input type="email" class="form-control form-control-sm" id="rent_building" name="rent_building" value="<?php echo e($rent->rent_building); ?>">
                      </div>
                      <div class="col-md-4">
                        <label for="rent_floor" class="form-label-sm">Tầng</label>
                        <input type="email" class="form-control form-control-sm" id="rent_floor" name="rent_floor" value="<?php echo e($rent->rent_floor); ?>">
                      </div>
                      <div class="col-md-4">
                        <label for="rent_style" class="form-label-sm">Loại căn hộ</label>
                        <select class="form-control form-control-sm" id="rent_style" name="rent_style">
                          <?php if( !empty( $house->_STYLE ) ): ?>
                            <?php $__currentLoopData = $house->_STYLE; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($value); ?>"><?php echo e($text); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label for="rent_direction" class="form-label-sm">Hướng</label>
                        <select class="form-control form-control-sm" id="rent_direction" name="rent_direction">
                          <?php if( !empty( $house->_DIRECTION ) ): ?>
                            <?php $__currentLoopData = $house->_DIRECTION; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($value); ?>"><?php echo e($text); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label for="rent_navigable_area" class="form-label-sm">DT thông thủy</label>
                        <input type="text" class="form-control form-control-sm" id="rent_navigable_area" name="rent_navigable_area" value="<?php echo e($rent->rent_navigable_area); ?>">
                      </div>
                      <div class="col-md-4">
                        <label for="rent_price" class="form-label-sm">Giá thuê</label>
                        <input type="text" class="form-control form-control-sm" id="rent_price" name="rent_price" value="<?php echo e($rent->rent_price); ?>">
                      </div>
                      <div class="col-md-12">
                        <label for="rent_description" class="form-label-sm">Mô tả</label>
                        <textarea class="form-control form-control-sm" name="rent_description" id="rent_description"><?php echo e($rent->rent_description); ?></textarea>
                      </div>
                    </div>
                </div> <!-- end card-body -->
              </div> <!-- end card -->

              <div class="card mt-3">
                <div class="card-body">
                    <!-- Images -->
                    <div class="col-md-12">
                      <a href="rent-add.html" class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-plus-lg"></i> Thêm mới ảnh</a>
                      <div class="row g-2" id="rent-img"></div>
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
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-modal-close"></button>
          </div>
          <div class="modal-body">
            <form action="<?php echo e(route('admin.media.rent-upload', $rent->rent_id)); ?>" id="admin-rent-uploadimg" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="rent-loadimg-url" value="<?php echo e(route('admin.media.rent-load', $rent->rent_id)); ?>">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-auto validate">
                        <input class="form-control" type="file" id="rent_img_input" name="files[]" multiple>
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

    <?php $__env->startSection('admin.script'); ?>
    <script src="<?php echo e(asset('form/rent.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8valuland\resources\views/admin/rent/edit.blade.php ENDPATH**/ ?>