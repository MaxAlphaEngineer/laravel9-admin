<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">@lang('translation.Menu')</li>

                <li>
                    <a href="index" class="waves-effect active">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-starter-page">@lang('translation.Starter_Page')</span>
                    </a>
                </li>


                <li class="menu-title" key="t-menu">@lang('translation.Pages')</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-success float-end"
                              key="t-new">@lang('translation.New')</span>
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">@lang('crud.user.manage')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('users.index')}}"
                               key="users">@lang('crud.user.title')</a></li>

                        <li><a href="{{route('permissions.index')}}" key="permissions">@lang('crud.permission.title')</a></li>

                        <li><a href="{{route('roles.index')}}" key="roles">@lang('crud.role.title')</a></li>


                    </ul>
                </li>

                <li class="menu-title" key="t-menu">@lang('translation.Settings')</li>

                <li>
                    <a href="{{route('settings')}}" class="waves-effect active">
                        <i class="bx bx bx-cog"></i>
                        <span key="t-starter-page">@lang('translation.Settings')</span>
                    </a>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level">@lang('translation.Multi_Level')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" key="t-level-1-1">@lang('translation.Level_1.1')</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                               key="t-level-1-2">@lang('translation.Level_1.2')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1">@lang('translation.Level_2.1')</a>
                                </li>
                                <li><a href="javascript: void(0);" key="t-level-2-2">@lang('translation.Level_2.2')</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
