<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pinogy Api Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pinogy Api Settings</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
      <div class="card card-default">
          <!-- /.card-header -->
          <div class="card-body">
           <form action="<?php echo e(route('pinogy-settings.update', $pinogypage->id)); ?>" method="POST">   
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6 form-group">
                            <label for="endUrl">End Url</label>
                            <input type="text" class="form-control" name="endurl" id="endurl" value="<?php echo e($pinogypage->endurl); ?>" placeholder="End Url"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="endUrl">Access Key</label>
                            <input type="text" class="form-control" name="accskey" id="accskey" value="<?php echo e($pinogypage->accskey); ?>" placeholder="Access Key"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="endUrl">Src Key</label>
                            <input type="text" class="form-control" name="srckey" id="srckey" value="<?php echo e($pinogypage->srckey); ?>" placeholder="Src Key"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="endUrl">Pwd Key</label>
                            <input type="text" class="form-control" name="pwdkey" id="pwdkey" value="<?php echo e($pinogypage->pwdkey); ?>" placeholder="Pwd Key"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="endUrl">Api Key</label>
                            <input type="text" class="form-control" name="apikey" id="apikey" value="<?php echo e($pinogypage->apikey); ?>" placeholder="Api Key"/>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="endUrl">Price</label>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="price" id="customCheckbox1" value="1" <?php echo e($pinogypage->price == 1 ? 'checked' : 0); ?>>
                            <label for="customCheckbox1" class="custom-control-label">On</label>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6 form-group">
                            <input type="submit" class="btn btn-primary" value="Update" />
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </form> 
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/donaldmethus/Sites/safaripet/backend/resources/views/admin/pinogy/edit.blade.php ENDPATH**/ ?>