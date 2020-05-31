


<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="main-content" id="panel">
          
        <?php echo $__env->make('admin.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Books</h6>
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
                            Books
                        </div>
                        <div class="card-body">
                             <?php if(session('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(__('Book has been successfully deleted')); ?>

                                </div>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Book Title</th>
                                        <th>Price</th>
                                        <th>Isbn</th>
                                        <th>format</th>
                                        <th>Description</th>
                                        <th>Author</th>
                                        <th>created</th>
                                        <th>sales</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                     <img src="<?php echo e(url('/').'/uploads/'.$book->cover_image); ?>" class="avatar rounded-circle mr-3" />
                                                     <b><?php echo e($book->name); ?></b>
                                                </td>
                                                <td>
                                                    <?php echo e(number_format($book->price)); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($book->isbn); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($book->format); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($book->description); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($book->author); ?>

                                                </td>
                                                <td><?php echo e($book->created_at->diffForHumans()); ?></td>
                                                <td>
                                                    <?php if(isset($book->payment)): ?>
                                                        <?php echo e($book->payment->count()); ?>

                                                    <?php endif; ?>
                                                    
                                                </td>
                                                <td class="table-actions">
                                                    <a href="/admin/books/update/<?php echo e($book->id); ?>" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                                        <i class="fas fa-user-edit"></i>
                                                     </a>
                                                    <a class="table-action deleteProduct table-action-delete" data-toggle="tooltip" data-id="<?php echo e($book->id); ?>" data-original-title="Delete product">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                               </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                         <div class="card-footer py-4">
                        <nav aria-label="...">
                             <?php echo e($books->onEachSide(6)->links()); ?>

                        </nav>
                      </div>
                    </div>
                </div>


                 </div>

    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="<?php echo e(asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')); ?>"></script>
  <script>
      //swal("Hello world!");
      $(".deleteProduct").click(function(){
          var Id = $(this).attr("data-id");
          console.log(Id)
         swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this Book file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                var url = '/admin/delete/book/'+ Id;
                axios.get(url)
                    .then((response)=>{
                        console.log(response)
                           swal("Poof! Your imaginary file has been deleted!", {
                             icon: "success",
                            });
                           setTimeout(() => {
                                location.reload();
                           },2000)
                    })
                    .catch((error)=>{
                        console.log(error)
                        swal("something went wrong", {
                             icon: "danger",
                            });
                    })
            } else {
                swal("Book Delete Sequence Aborted");
            }
            });
        });
  </script>
<script src="<?php echo e(asset('admin/assets/js/vue-bot-page.js')); ?>"></script>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Main-projects\zenBooks\resources\views/admin/books.blade.php ENDPATH**/ ?>