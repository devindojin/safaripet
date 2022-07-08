<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Script Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Script Settings</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
      <div class="card card-default">
          <div class="card-header">
            <div class="my-2">
                
            </div> 
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fas fa-check"></i> Alert!</h5>
              <?php echo e($message); ?>

            </div>
            <?php endif; ?>

           <form action="<?php echo e(route('update_script_setting')); ?>" method="POST" enctype="multipart/form-data">   
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="exampleInputEmail1">Header Script Setting</label>
                        <textarea class="form-control" name="header_display" rows="8">   <?php echo e($ss->header_display); ?></textarea>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Header Script Status</label>
                        <select class="form-control" name="header_display_status" id="header_display_status">
                            <option <?php if($ss->header_display_status==1): ?> selected <?php endif; ?> value="1">Active</option>
                            <option <?php if($ss->header_display_status==2): ?> selected <?php endif; ?>  value="2">In-Active</option>
                        </select>
                    </div> 
                    <div class="col-md-12 form-group">
                        <label for="exampleInputEmail1">Footer Script Setting</label>
                        <textarea class="form-control" name="footer_display" rows="8">   <?php echo e($ss->footer_display); ?></textarea>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Footer Script Status</label>
                        <select class="form-control" name="footer_display_status" id="footer_display_status">
                            <option  <?php if($ss->footer_display_status==1): ?> selected <?php endif; ?> value="1">Active</option>
                            <option <?php if($ss->footer_display_status==2): ?> selected <?php endif; ?>  value="2">In-Active</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="exampleInputEmail1">Body Script Setting</label>
                        <textarea class="form-control" name="body_display" rows="8">   <?php echo e($ss->body_display); ?></textarea>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Body Script Status</label>
                        <select class="form-control" name="body_display_status" id="body_display_status">
                            <option  <?php if($ss->body_display_status==1): ?> selected <?php endif; ?> value="1">Active</option>
                            <option <?php if($ss->body_display_status==2): ?> selected <?php endif; ?>  value="2">In-Active</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="submit" class="btn btn-primary" value="Submit" />
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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/donaldmethus/Sites/safaripet/backend/resources/views/admin/settings/script_setting.blade.php ENDPATH**/ ?>