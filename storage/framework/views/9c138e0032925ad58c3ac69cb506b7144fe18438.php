<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.User_List'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Contacts <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Users List <?php $__env->endSlot(); ?>
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
                                <a href="<?php echo e(route('users.create')); ?>" type="button"
                                        class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                                        class="mdi mdi-plus me-1"></i> New Customers</a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-lg-5">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Phone / Email</th>
                                <th>Rating</th>
                                <th>Role</th>
                                <th>Joining Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="customerlistcheck01">
                                        <label class="form-check-label" for="customerlistcheck01"></label>
                                    </div>
                                </td>
                                <td><?php echo e($user->name); ?></td>
                                <td>
                                    <p class="mb-1"><?php echo e($user->phone??""); ?></p>
                                    <p class="mb-0"><?php echo e($user->email); ?></p>
                                </td>

                                <td><span class="badge bg-success font-size-12"><i class="mdi mdi-star me-1"></i>
                                            4.2</span></td>
                                <td>
                                    <div>
                                        <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="#" class="badge badge-soft-primary font-size-11 m-1"><?php echo e($role); ?></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </td>
                                <td><?php echo e(date('j-F, Y ', strtotime($user->created_at))); ?></td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo e($users->links('components.pagination')); ?>


                </div>
            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muzaffarmakhkamov/PhpstormProjects/laravel9/resources/views/dashboard/user/index.blade.php ENDPATH**/ ?>