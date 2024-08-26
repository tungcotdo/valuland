
<?php $__env->startSection('admin.main'); ?>

<div class="pagetitle">
    <h1>Thêm mới chủ nhà</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.owner.index')); ?>">Chủ nhà</a></li>
        <li class="breadcrumb-item active">Thêm mới</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Start owner -->
          <form class="col-12" action="<?php echo e(route('admin.owner.store')); ?>" id="admin-owner-store" method="POST">
            <?php echo csrf_field(); ?>
            
            <div class="card">
              <div class="card-body">
                  <div class="row g-3">
                      <div class="col-md-6 validate">
                        <label for="code" class="form-label-sm">Mã căn <small class="text-danger"> *</small></label>
                        <input type="text" class="form-control form-control-sm" id="code" name="code">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-6 validate">
                        <label for="owner_name" class="form-label-sm">Tên chủ hộ <small class="text-danger"> *</small></label>
                        <input type="text" class="form-control form-control-sm" id="owner_name" name="owner_name">
                        <small class="error-message text-danger"></small>
                      </div>
                      <!-- <div class="col-md-6 validate">
                        <label for="owner_email" class="form-label-sm">Email chủ hộ (Ngăn cách bằng dấu ;) <small class="text-danger"> *</small></label>
                        <input type="text" class="form-control form-control-sm" id="owner_email" name="owner_email">
                        <small class="error-message text-danger"></small>
                      </div> -->
                      <div class="col-md-6 validate">
                        <label for="owner_phone" class="form-label-sm">Điện thoại chủ hộ <small class="text-danger"> *</small></label>
                        <input type="text" class="form-control form-control-sm" id="owner_phone" name="owner_phone">
                        <small class="error-message text-danger"></small>
                      </div>
                      <div class="col-md-6">
                        <label for="owner_demand" class="form-label-sm">Nhu cầu</label>
                        <select id="owner_demand" class="form-select form-select w-100" name="owner_demand">
                          <option selected="" value="0">Không có</option>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin.script'); ?>
  <script>
      Validator({
          form: '#admin-owner-store',
          rules: [
              Validator.tbRequired({
                  selector: '#code',
                  submit: true
              }),
              Validator.tbRequired({
                  selector: '#owner_name',
                  submit: true
              }),
              // Validator.tbRequired({
              //     selector: '#owner_email',
              //     submit: true
              // }),
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8valuland\resources\views/admin/owner/add.blade.php ENDPATH**/ ?>