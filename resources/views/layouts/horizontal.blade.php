<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset ('/assets/images/logo.svg') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset ('/assets/images/logo-dark.png') }}" alt="" height="17">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset ('/assets/images/logo-light.svg') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset ('/assets/images/logo-light.png') }}" alt="" height="19">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="@lang('translation.Search')">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>

            <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="false" aria-expanded="false">
                    <span key="t-megamenu">@lang('translation.Mega_Menu')</span>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-ui-components">
                                        @lang('translation.UI_Components')</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-lightbox">@lang('translation.Lightbox')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-range-slider">@lang('translation.Range_Slider')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-sweet-alert">@lang('translation.Sweet_Alert')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-rating">@lang('translation.Rating')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-forms">@lang('translation.Forms')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tables">@lang('translation.Tables')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-charts">@lang('translation.Charts')</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-applications">@lang('translation.Applications')
                                    </h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-ecommerce">@lang('translation.Ecommerce')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-calendar">@lang('translation.Calendars')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-email">@lang('translation.Email')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-projects">@lang('translation.Projects')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tasks">@lang('translation.Tasks')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-contacts">@lang('translation.Contacts')</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-extra-pages">@lang('translation.Extra_Pages')
                                    </h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-light-sidebar">@lang('translation.Light_Sidebar')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-compact-sidebar">@lang('translation.Compact_Sidebar')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-horizontal">@lang('translation.Horizontal_layout')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-maintenance">@lang('translation.Maintenance')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-coming-soon">@lang('translation.Coming_Soon')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-timeline">@lang('translation.Timeline')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-faqs">@lang('translation.FAQs')</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14 mt-0" key="t-ui-components">
                                        @lang('translation.UI_Components')</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-lightbox">@lang('translation.Lightbox')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-range-slider">@lang('translation.Range_Slider')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                key="t-sweet-alert">@lang('translation.Sweet_Alert')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-rating">@lang('translation.Rating')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-forms">@lang('translation.Forms')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tables">@lang('translation.Tables')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-charts">@lang('translation.Charts')</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="{{ URL::asset ('/assets/images/megamenu-img.png') }}" alt=""
                                            class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="@lang('translation.Search')"
                                    aria-label="Search input">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>s
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @switch(Session::get('lang'))
                    @case('ru')
                    <img src="{{ URL::asset('/assets/images/flags/russia.jpg')}}" alt="Header Language" height="16">
                    <span class="align-middle">Russian</span>
                    @break
                    @case('it')
                    <img src="{{ URL::asset('/assets/images/flags/italy.jpg')}}" alt="Header Language" height="16">
                    <span class="align-middle">Italian</span>
                    @break
                    @case('de')
                    <img src="{{ URL::asset('/assets/images/flags/germany.jpg')}}" alt="Header Language" height="16">
                    <span class="align-middle">German</span>
                    @break
                    @case('es')
                    <img src="{{ URL::asset('/assets/images/flags/spain.jpg')}}" alt="Header Language" height="16">
                    <span class="align-middle">Spanish</span>
                    @break
                    @default
                    <img src="{{ URL::asset('/assets/images/flags/us.jpg')}}" alt="Header Language" height="16"> <span
                        class="align-middle">English</span>
                    @endswitch
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="{{ url('index/en') }}" class="dropdown-item notify-item language" data-lang="eng">
                        <img src="{{ URL::asset ('/assets/images/flags/us.jpg') }}" alt="user-image" class="me-1"
                            height="12"> <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a href="{{ url('index/es') }}" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="{{ URL::asset ('/assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1"
                            height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/de') }}" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="{{ URL::asset ('/assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1"
                            height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/it') }}" class="dropdown-item notify-item language" data-lang="it">
                        <img src="{{ URL::asset ('/assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1"
                            height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/ru') }}" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="{{ URL::asset ('/assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1"
                            height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/github.png') }}" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/bitbucket.png') }}" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/dribbble.png') }}" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/dropbox.png') }}" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/mail_chimp.png') }}"
                                        alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('/assets/images/brands/slack.png') }}" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> @lang('translation.Notifications') </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small" key="t-view-all"> @lang('translation.View_All')</a>
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
                                    <h6 class="mt-0 mb-1" key="t-your-order">@lang('translation.Your_order_is_placed')
                                    </h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">
                                            @lang('translation.If_several_languages_coalesce_the_grammar')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                key="t-min-ago">@lang('translation.3_min_ago')</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="{{ URL::asset ('/assets/images/users/avatar-3.jpg') }}"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1">@lang('translation.James_Lemire')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-simplified">
                                            @lang('translation.It_will_seem_like_simplified_English')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                key="t-hours-ago">@lang('translation.1_hours_ago')</span></p>
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
                                    <h6 class="mt-0 mb-1" key="t-shipped">@lang('translation.Your_item_is_shipped')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">
                                            @lang('translation.If_several_languages_coalesce_the_grammar')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                key="t-min-ago">@lang('translation.3_min_ago')</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="{{ URL::asset ('/assets/images/users/avatar-4.jpg') }}"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1">@lang('translation.Salena_Layfield')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-occidental">
                                            @lang('translation.As_a_skeptical_Cambridge_friend_of_mine_occidental')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                key="t-hours-ago">@lang('translation.1_hours_ago')</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span
                                key="t-view-more">@lang('translation.View_More')</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ucfirst(Auth::user()->name)}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="contacts-profile"><i
                            class="bx bx-user font-size-16 align-middle me-1"></i> <span
                            key="t-profile">@lang('translation.Profile')</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span
                            key="t-my-wallet">@lang('translation.My_Wallet')</span></a>
                    <a class="dropdown-item d-block" href="#" data-bs-toggle="modal"
                        data-bs-target=".change-password"><span class="badge bg-success float-end">11</span><i
                            class="bx bx-wrench font-size-16 align-middle me-1"></i> <span
                            key="t-settings">@lang('translation.Settings')</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                        <span key="t-lock-screen">@lang('translation.Lock_screen')</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                            key="t-logout">@lang('translation.Logout')</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
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

<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="index" role="button">
                            <i class="bx bx-home-circle me-2"></i><span
                                key="t-starter-page">@lang('translation.Starter_Page')</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none active" href="layouts-horizontal" role="button">
                            <i class="bx bx-layout me-2"></i><span key="t-horizontal">Horizontal</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button">
                            <i class="bx bx-user-circle me-2"></i><span key="t-authentication">Authentication</span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-auth">
                            <a href="auth-login" class="dropdown-item" key="t-login">@lang('translation.Login')</a>
                            <a href="auth-login-2" class="dropdown-item" key="t-login-2">@lang('translation.Login')
                                2</a>
                            <a href="auth-register" class="dropdown-item"
                                key="t-register">@lang('translation.Register')</a>
                            <a href="auth-register-2" class="dropdown-item"
                                key="t-register-2">@lang('translation.Register') 2</a>
                            <a href="auth-recoverpw" class="dropdown-item"
                                key="t-recover-password">@lang('translation.Recover_Password')</a>
                            <a href="auth-recoverpw-2" class="dropdown-item"
                                key="t-recover-password-2">@lang('translation.Recover_Password') 2</a>
                            <a href="auth-lock-screen" class="dropdown-item"
                                key="t-lock-screen">@lang('translation.Lock_Screen')</a>
                            <a href="auth-lock-screen-2" class="dropdown-item"
                                key="t-lock-screen-2">@lang('translation.Lock_Screen') 2</a>
                            <a href="auth-confirm-mail" class="dropdown-item"
                                key="t-confirm-mail">@lang('translation.Confirm_Mail')</a>
                            <a href="auth-confirm-mail-2" class="dropdown-item"
                                key="t-confirm-mail-2">@lang('translation.Confirm_Mail') 2</a>
                            <a href="auth-email-verification" class="dropdown-item"
                                key="t-email-verification">@lang('translation.Email_verification')</a>
                            <a href="auth-email-verification-2" class="dropdown-item"
                                key="t-email-verification-2">@lang('translation.Email_verification') 2</a>
                            <a href="auth-two-step-verification" class="dropdown-item"
                                key="t-two-step-verification">@lang('translation.Two_step_verification')</a>
                            <a href="auth-two-step-verification-2" class="dropdown-item"
                                key="t-two-step-verification-2">@lang('translation.Two_step_verification') 2</a>
                        </div>
                    </li>
                </ul>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!--  Change-Password example -->
<div class="modal fade change-password" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="change-password">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" id="data_id">
                    <div class="mb-3">
                        <label for="current_password">Current Password</label>
                        <input id="current-password" type="password"
                            class="form-control @error('current_password') is-invalid @enderror" name="current_password"
                            autocomplete="current_password" placeholder="Enter Current Password"
                            value="{{ old('current_password') }}">
                        <div class="text-danger" id="current_passwordError" data-ajax-feedback="current_password"></div>
                    </div>

                    <div class="mb-3">
                        <label for="newpassword">New Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
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
                        <button class="btn btn-primary waves-effect waves-light UpdatePassword"
                            data-id="{{ Auth::user()->id }}" type="submit">Update Password</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
