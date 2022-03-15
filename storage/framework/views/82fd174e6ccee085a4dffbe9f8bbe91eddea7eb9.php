<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.User_List'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Contacts <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Roles <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <a href="<?php echo e(route('roles.create')); ?>" type="button"
                                   class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                                        class="mdi mdi-plus me-1"></i> New role</a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-lg-5">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox" id="customerlistcheck01">
                                            <label class="form-check-label" for="customerlistcheck01"></label>
                                        </div>
                                    </td>
                                    <td><?php echo e($role->name); ?></td>
                                    <td>
                                        <p class="mb-0"><?php echo e($role->title); ?></p>
                                    </td>



                                    </td>
                                    <td><?php echo e(date('j-F, Y ', strtotime($role->created_at))); ?></td>
                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="" title="Message"><i class="bx bx bx-show-alt"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a href="" title="Profile"><i class="bx bx-pencil"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a href="" title="Profile"><i class="bx bx-trash"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo e($roles->links('components.pagination')); ?>


                </div>
            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muzaffarmakhkamov/PhpstormProjects/laravel9/resources/views/dashboard/role/index.blade.php ENDPATH**/ ?>