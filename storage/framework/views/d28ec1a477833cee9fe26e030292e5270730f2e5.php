
<?php $__env->startSection('admin.main'); ?>
    <div class="pagetitle">
        <h1>Danh sách bán tinh</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh sách bán tinh</li>
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
            <form class="row g-3" action="<?php echo e(route('admin.sale.select')); ?>">
                <div class="col-md-3 validate">
                    <label for="code" class="form-label form-label-sm">Mã căn</label>
                    <input type="text" class="form-control form-control-sm" id="code" name="code" value="<?php echo e(request()->code); ?>">
                    <small class="error-message text-danger"></small>
                </div>
                <div class="col-md-3 validate">
                    <label for="owner_name" class="form-label form-label-sm">Tên</label>
                    <input type="text" class="form-control form-control-sm" id="owner_name" name="owner_name" value="<?php echo e(request()->owner_name); ?>">
                    <small class="error-message text-danger"></small>
                </div>
                <div class="col-md-3 validate">
                    <label for="owner_phone" class="form-label form-label-sm">Điện thoại</label>
                    <input type="text" class="form-control form-control-sm" id="owner_phone" name="owner_phone" value="<?php echo e(request()->owner_phone); ?>">
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

              <!-- Start sale -->
              <div class="col-12">
                <div class="card">
                  <div class="card-body">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col" class="small">MÃ CĂN</th>
                          <th scope="col" class="small">TÊN</th>
                          <th scope="col" class="small">ĐIÊN THOẠI</th>
                          <th scope="col" class="small">CẬP NHẬT BỞI</th>
                          <th scope="col" class="small">THỜI GIAN CẬP NHẬT</th>
                          <th scope="col" class="small">HÀNH ĐỘNG</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if( !empty( $sale_selects ) ): ?>
                            <?php $__currentLoopData = $sale_selects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($value->code); ?></th>
                                    <td><?php echo e($value->owner_name); ?></td>
                                    <td><?php echo e($value->owner_phone); ?></td>
                                    <td><?php echo e($value->sale_updated_by); ?></td>
                                    <td><?php echo e($value->sale_updated_at); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.sale.edit', $value->sale_id)); ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square small"> Sửa</i></a>
                                        <a href="<?php echo e(route('admin.sale.delete', $value->sale_id)); ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash small"> Xóa</i></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      </tbody>
                    </table>


                  </div>

                </div>
              </div><!-- End owner -->
              <nav class="mt-3" aria-label="...">
                <ul class="pagination pagination-sm">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Lùi</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Tiến</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div><!-- End Left side columns -->

        </div>
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8valuland\resources\views/admin/sale/select.blade.php ENDPATH**/ ?>