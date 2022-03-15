<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Form_Layouts'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Settings <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Settings <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Customize app</h4>

                    <form>
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Project name</label>
                            <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter project name">
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Contact Email</label>
                                    <input type="email" class="form-control" id="formrow-email-input" placeholder="Enter Your Contact Email">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-phone-input" class="form-label">Contact Phone</label>
                                    <input type="tel" class="form-control" id="formrow-phone-input" placeholder="Enter Your Contact Phone">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="formrow-inputCity" placeholder="Enter Your Living City">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">State</label>
                                    <select id="formrow-inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="formrow-inputZip" placeholder="Enter Your Zip Code">
                                </div>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary w-md">Save</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->


    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muzaffarmakhkamov/PhpstormProjects/laravel9/resources/views/dashboard/user/create.blade.php ENDPATH**/ ?>