


<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="main-content" id="panel">
          
        <?php echo $__env->make('admin.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Bot</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/index')); ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Admin</li>
                            </ol>
                        </nav>
                        </div>
                      
                    </div>
                    </div>
                </div>
            </div>

          
            <div class="container-fluid mt--6">
                <div class="card">
                    <div class="card-header">
                        Dashboard
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <?php if(session('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(__('Book has been successfully added')); ?>

                                </div>
                            <?php endif; ?>
                           <div class="row">
                               <div class="col-md-6">
                                    <form action="/admin/index" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <lable for="name" class="col-md-3">Book Name </lable>
                                            <div class="col-md-9 mb-4">
                                                <input class="form-control form-control-sm" type="text" id="name" name="name" placeholder="Book Title" value="<?php echo e(old('name')); ?>"/>
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger" >
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <br>
                                            <lable for="isbn" class="col-md-3">Book ISBN  </lable>
                                            <div class="col-md-9 mb-4">
                                                <input class="form-control form-control-sm" type="text" name="isbn" id="isbn" placeholder="Book ISBN" value="<?php echo e(old('isbn')); ?>"/>
                                                <?php $__errorArgs = ['isbn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger" >
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <br>
                                            <lable for="cover_image" class="col-md-3">Book Cover Image </lable>
                                            <div class="col-md-9 mb-4">
                                                 <input type="file" name="file" id="fileuploadInput" accept=".png, .jpg, .jpeg" required>
                                                <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger" >
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                             <br>
                                            <lable for="book" class="col-md-3">Book Content </lable>
                                            <div class="col-md-9 mb-4">
                                                 <input type="file" name="book" id="fileuploadInput" accept=".pdf, .docx" required>
                                                <?php $__errorArgs = ['book'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger" >
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                             <br>
                                            <lable for="price" class="col-md-3">Book Price </lable>
                                            <div class="col-md-9 mb-4">
                                                <input class="form-control form-control-sm" name="price" type="text" id="price" placeholder="Book Price" value="<?php echo e(old('price')); ?>"/>
                                                  <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger" >
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                             <br>
                                            <lable for="price" class="col-md-3">Book Description </lable>
                                            <div class="col-md-9 mb-4">
                                                <textarea class="form-control" name="description" row="9"></textarea>
                                                 <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger" >
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                             <br>
                                            <lable for="format" class="col-md-3">Book Format</lable>
                                            <div class="col-md-9 mb-4">
                                                <input class="form-control form-control-sm" type="text" id="format" name="format" placeholder="Book Format......eg PDF" value="<?php echo e(old('format')); ?>"/>
                                                 <?php $__errorArgs = ['format'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger" >
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>


                                             <br>
                                            <lable for="author" class="col-md-3">Book Author</lable>
                                            <div class="col-md-9 mb-4">
                                                <input class="form-control form-control-sm" type="text" id="author" name="author" placeholder="Book Author's Name" value="<?php echo e(old('author')); ?>"/>
                                                 <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger" >
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary mt-3" type="submit"><i class="fa fa-paper-plane"></i> Submit Book</button>
                                    </form>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>


      </div>

    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('admin/assets/js/vue-bot-page.js')); ?>"></script>
<?php $__env->stopSection(); ?>
  

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Main-projects\zenBooks\resources\views/admin/index.blade.php ENDPATH**/ ?>