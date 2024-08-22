
<?php $__env->startSection('admin.main'); ?>
    <div class="pagetitle">
        <h1>Danh sách thông báo</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard.index')); ?>">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.notification.index')); ?>">Thông báo</a></li>
            <li class="breadcrumb-item active">Danh sách</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Filter -->
    <div class="card">
        <div class="accordion-item p-3">
            <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed py-2 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <i class="bi bi-filter-left"> Bộ lọc</i>
            </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse show mt-3" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                <form class="row g-3" action="<?php echo e(route('admin.notification.index')); ?>">
                    <div class="col-md-3 validate">
                        <label for="code" class="form-label form-label-sm">Tiêu đề</label>
                        <input type="text" class="form-control form-control-sm" id="notification_title" name="notification_title" value="<?php echo e(request()->notification_title); ?>">
                        <small class="error-message text-danger"></small>
                    </div>
                    <div class="col-md-3 validate">
                        <label for="code" class="form-label form-label-sm">Tiêu đề</label>
                        <input type="text" class="form-control form-control-sm" id="notification_content" name="notification_content" value="<?php echo e(request()->notification_content); ?>">
                        <small class="error-message text-danger"></small>
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

            <!-- Start notification -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">

                  <div class="card-btns">
                    <a href="<?php echo e(route('admin.notification.add')); ?>" class="btn btn-sm btn-primary"><i class="bi bi-plus-lg"></i> Thêm mới</a>
                  </div>

                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Đối tượng gửi</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Hành động</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($value->notification_title); ?></td>
                                <td><?php echo e($value->notification_content); ?></td>
                                <td><?php echo e($value->notification_user_group); ?></td>
                                <td><?php echo e(!empty( $value->notification_issend ) ? 'Đã gửi' : 'Chưa gửi'); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.notification.send', ['notification_id' => $value->notification_id, 'notification_issend' => 1])); ?>" class="btn btn-sm btn-success"><i class="bi bi-send"></i> <?php echo e(($value->notification_issend == 1) ? "Gửi lại" : "Gửi"); ?></a>
                                    <a href="<?php echo e(route('admin.notification.edit', $value->notification_id)); ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Sửa</a>
                                    <a onclick="return confirm('Bạn có muốn xóa dữ liệu này không?')" href="<?php echo e(route('admin.notification.delete', $value->notification_id)); ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>

              </div>
            </div><!-- End raw -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8valuland\resources\views/admin/notification/index.blade.php ENDPATH**/ ?>