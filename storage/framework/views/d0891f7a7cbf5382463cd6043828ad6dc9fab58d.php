<?php if($paginator->hasPages()): ?>
    <div class="row">
        <div class="col-lg-12">
            <ul class="pagination pagination-rounded justify-content-end mb-2">

                <?php if($paginator->onFirstPage()): ?>
                    <li class="page-item disabled">
                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                    </li>
                <?php else: ?>
                    <li class="page-item">
                        <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="page-link"><i
                                class="mdi mdi-chevron-left"></i></a>
                    </li>
                <?php endif; ?>

                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if(is_string($element)): ?>
                        <li class="page-item disabled"><a class="page-link" href="#"><?php echo e($element); ?></a></li>
                    <?php endif; ?>
                    
                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $paginator->currentPage()): ?>

                                <li class="page-item active">
                                    <a href="<?php echo e($url); ?>" class="page-link"><?php echo e($page); ?></a>
                                </li>
                            <?php else: ?>
                                <li class="page-item">
                                    <a href="<?php echo e($url); ?>" class="page-link"><?php echo e($page); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if($paginator->hasMorePages()): ?>
                    <li class="page-item">
                        <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="page-link"><i
                                class="mdi mdi-chevron-right"></i></a>
                    </li>
                <?php else: ?>
                    <li class="page-item disabled">
                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>

<?php endif; ?>
<?php /**PATH /Users/muzaffarmakhkamov/PhpstormProjects/laravel9/resources/views/components/pagination.blade.php ENDPATH**/ ?>