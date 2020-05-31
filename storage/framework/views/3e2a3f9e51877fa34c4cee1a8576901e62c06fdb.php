


<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="main-content" id="panel">
          
        <?php echo $__env->make('admin.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Payments</h6>
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
                            payments
                        </div>
                        <div class="card-body">
                             <?php if(session('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(__('payment has been successfully deleted')); ?>

                                </div>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Email</th>
                                        <th>payment</th>
                                        <th>Transaction</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Payment Gateway</th>
                                        <th>Status</th>
                                        <th>created</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                     
                                                     <b><?php echo e($payment->user_email); ?></b>
                                                </td>
                                                <td>
                                                    <?php echo e($payment->book->name); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($payment->txnId); ?>

                                                </td>
                                                <td>
                                                    <?php echo e(number_format($payment->amount)); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($payment->description); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($payment->type); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($payment->status); ?>

                                                </td>
                                                <td><?php echo e($payment->created_at->diffForHumans()); ?></td>
                                                
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                         <div class="card-footer py-4">
                        <nav aria-label="...">
                             <?php echo e($payments->onEachSide(6)->links()); ?>

                        </nav>
                      </div>
                    </div>
                </div>


                 </div>

    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Main-projects\zenBooks\resources\views/admin/payments.blade.php ENDPATH**/ ?>