<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo e(URL::asset('/assets/images/logo.svg')); ?>" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo e(URL::asset('/assets/images/logo-dark.png')); ?>" alt="" height="17">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo e(URL::asset('/assets/images/logo-light.svg')); ?>" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo e(URL::asset('/assets/images/logo-light.png')); ?>" alt="" height="19">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

           <!-- App Search-->
           <form class="app-search d-none d-lg-block">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('translation.Search'); ?>">
                <span class="bx bx-search-alt"></span>
            </div>
        </form>


    </div>

    <div class="d-flex">

        <div class="dropdown d-inline-block d-lg-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-magnify"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-search-dropdown">

                <form class="p-3">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('translation.Search'); ?>" aria-label="Search input">

                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php switch(Session::get('lang')):
                    case ('ru'): ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/russia.jpg')); ?>" alt="Header Language" height="16">
                    <?php break; ?>
                    <?php case ('uz'): ?>
                    <img src="<?php echo e(URL::asset('/assets/images/flags/uzbekistan.png')); ?>" alt="Header Language" height="16">
                    <?php break; ?>
                    <?php default: ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/us.jpg')); ?>" alt="Header Language" height="16">
                <?php endswitch; ?>
            </button>
            <div class="dropdown-menu dropdown-menu-end">

                <!-- item-->
                <a href="<?php echo e(url('index/en')); ?>" class="dropdown-item notify-item language" data-lang="eng">
                    <img src="<?php echo e(URL::asset ('/assets/images/flags/us.jpg')); ?>" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                </a>
                <!-- item-->
                <a href="<?php echo e(url('index/uz')); ?>" class="dropdown-item notify-item language" data-lang="uz">
                    <img src="<?php echo e(URL::asset ('/assets/images/flags/uzbekistan.png')); ?>" alt="user-image" class="me-1" height="12"> <span class="align-middle">Uzbek</span>
                </a>

                <!-- item-->
                <a href="<?php echo e(url('index/ru')); ?>" class="dropdown-item notify-item language" data-lang="ru">
                    <img src="<?php echo e(URL::asset ('/assets/images/flags/russia.jpg')); ?>" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                </a>
            </div>
        </div>

        <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-customize"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <div class="px-lg-2">
                    <div class="row g-0">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/github.png')); ?>" alt="Github">
                                <span>GitHub</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/bitbucket.png')); ?>" alt="bitbucket">
                                <span>Bitbucket</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/dribbble.png')); ?>" alt="dribbble">
                                <span>Dribbble</span>
                            </a>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/dropbox.png')); ?>" alt="dropbox">
                                <span>Dropbox</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/mail_chimp.png')); ?>" alt="mail_chimp">
                                <span>Mail Chimp</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/slack.png')); ?>" alt="slack">
                                <span>Slack</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                <i class="bx bx-fullscreen"></i>
            </button>
        </div>
        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-bell bx-tada"></i>
                <span class="badge bg-danger rounded-pill">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-0" key="t-notifications"> <?php echo app('translator')->get('translation.Notifications'); ?> </h6>
                        </div>
                        <div class="col-auto">
                            <a href="#!" class="small" key="t-view-all"> <?php echo app('translator')->get('translation.View_All'); ?></a>
                        </div>
                    </div>
                </div>
                <div data-simplebar style="max-height: 230px;">
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                    <i class="bx bx-cart"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mt-0 mb-1" key="t-your-order"><?php echo app('translator')->get('translation.Your_order_is_placed'); ?></h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-grammer"><?php echo app('translator')->get('translation.If_several_languages_coalesce_the_grammar'); ?></p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?php echo app('translator')->get('translation.3_min_ago'); ?></span></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex">
                            <img src="<?php echo e(URL::asset ('/assets/images/users/avatar-3.jpg')); ?>"
                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                            <div class="flex-grow-1">
                                <h6 class="mt-0 mb-1"><?php echo app('translator')->get('translation.James_Lemire'); ?></h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-simplified"><?php echo app('translator')->get('translation.It_will_seem_like_simplified_English'); ?></p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago"><?php echo app('translator')->get('translation.1_hours_ago'); ?></span></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                    <i class="bx bx-badge-check"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mt-0 mb-1" key="t-shipped"><?php echo app('translator')->get('translation.Your_item_is_shipped'); ?></h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-grammer"><?php echo app('translator')->get('translation.If_several_languages_coalesce_the_grammar'); ?></p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?php echo app('translator')->get('translation.3_min_ago'); ?></span></p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="" class="text-reset notification-item">
                        <div class="d-flex">
                            <img src="<?php echo e(URL::asset ('/assets/images/users/avatar-4.jpg')); ?>"
                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                            <div class="flex-grow-1">
                                <h6 class="mt-0 mb-1"><?php echo app('translator')->get('translation.Salena_Layfield'); ?></h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-occidental"><?php echo app('translator')->get('translation.As_a_skeptical_Cambridge_friend_of_mine_occidental'); ?></p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago"><?php echo app('translator')->get('translation.1_hours_ago'); ?></span></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-2 border-top d-grid">
                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more"><?php echo app('translator')->get('translation.View_More'); ?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                    alt="Header Avatar">
                <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo e(ucfirst(Auth::user()->name)); ?></span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile"><?php echo app('translator')->get('translation.Profile'); ?></span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet"><?php echo app('translator')->get('translation.My_Wallet'); ?></span></a>
                <a class="dropdown-item d-block" href="#" data-bs-toggle="modal" data-bs-target=".change-password"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings"><?php echo app('translator')->get('translation.Settings'); ?></span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen"><?php echo app('translator')->get('translation.Lock_screen'); ?></span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout"><?php echo app('translator')->get('translation.Logout'); ?></span></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                <i class="bx bx-cog bx-spin"></i>
            </button>
        </div>
    </div>
</div>
</header>
<!--  Change-Password example -->
<div class="modal fade change-password" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="change-password">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" id="data_id">
                    <div class="mb-3">
                        <label for="current_password">Current Password</label>
                        <input id="current-password" type="password"
                            class="form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="current_password" autocomplete="current_password"
                            placeholder="Enter Current Password" value="<?php echo e(old('current_password')); ?>">
                        <div class="text-danger" id="current_passwordError" data-ajax-feedback="current_password"></div>
                    </div>

                    <div class="mb-3">
                        <label for="newpassword">New Password</label>
                        <input id="password" type="password"
                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                            autocomplete="new_password" placeholder="Enter New Password">
                        <div class="text-danger" id="passwordError" data-ajax-feedback="password"></div>
                    </div>

                    <div class="mb-3">
                        <label for="userpassword">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            autocomplete="new_password" placeholder="Enter New Confirm password">
                        <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                    </div>

                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary waves-effect waves-light UpdatePassword" data-id="<?php echo e(Auth::user()->id); ?>"
                            type="submit">Update Password</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php /**PATH /Users/muzaffarmakhkamov/PhpstormProjects/laravel9/resources/views/layouts/topbar.blade.php ENDPATH**/ ?>