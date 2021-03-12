<div class="page-header navbar navbar-fixed-top">

    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            
            <div style="color:black!important;" class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->

        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->

            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">


                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                        <!-- <img alt="" class="img-circle" src="{{URL::asset('assets/layouts/layout2/img/avatar3_small.jpg')}}" />-->
                            <span> <i class="icon-user"></i>  </span>
                            <span class="username username-hide-on-mobile">  </span>
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-default">


                            <li>

                                <form method="post" action="{{url('/logout')}}">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-default btn-block"
                                            style="font-family:Baloo Bhaijaan;">
                                        <i class="icon-key"></i> تسجيل الخروج
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- END SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu page-header-fixed page-sidebar-menu-compact " data-keep-expanded="false"
                data-auto-scroll="true" data-slide-speed="200">
                @can('isUser')
                    <li class="nav-item start ">
                        <a href="javascript:" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">الرئيسية</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item start ">
                                <a href="{{route('home')}}" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">الرئيسية </span>
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li class="nav-item  ">
                        <a href="javascript:" class="nav-link nav-toggle">
                            <i class="icon-bar-chart"></i>
                            <span class="title">الإحصائات</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">

                            <li class="nav-item ">
                                <a href="{{route('reports')}}" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">التقارير </span>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan

        

                            <li class="nav-item  ">
                            <a href="javascript:" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title">الطلاب</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{route('students_files')}}" class="nav-link ">
                                        <i class="icon-wallet"></i>
                                        <span class="title">     ملفات الطلاب</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{route('students_social')}}" class="nav-link ">
                                        <i class="icon-wallet"></i>
                                        <span class="title"> الملف الإجتماعي</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    <li class="nav-item  ">
                        <a href="javascript:" class="nav-link nav-toggle">
                            <i class="icon-wallet"></i>
                            <span class="title">التسعير</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            @can('isAdmin')
                                <li class="nav-item  ">
                                    <a href="{{route('categories')}}" class="nav-link ">
                                        <i class="icon-wallet"></i>
                                        <span class="title">الفئات</span>
                                    </a>
                                </li>
                            @endcan
                            @can('isUser')
                                <li class="nav-item  ">
                                    <a href="{{route('pricing')}}" class="nav-link ">
                                        <i class="icon-wallet"></i>
                                        <span class="title">السعر</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{route('pricing_data')}}" class="nav-link ">
                                        <i class="icon-info"></i>
                                        <span class="title">البيانات </span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>

                    @can('isUser')
                        <li class="nav-item  ">
                            <a href="javascript:" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title">الوجبات</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{route('meals')}}" class="nav-link ">
                                        <i class="icon-wallet"></i>
                                        <span class="title">فئات الوجبات</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{route('meal_items')}}" class="nav-link ">
                                        <i class="icon-wallet"></i>
                                        <span class="title">عناصر الوجبات</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                @endcan
                @can('isAdmin')
                    <li class="nav-item  ">
                        <a href="javascript:" class="nav-link nav-toggle">
                            <i class="fa fa-bank"></i>
                            <span class="title">المراقبة</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="{{route('halls')}}" class="nav-link ">
                                    <i class="icon-clock"></i>
                                    <span class="title">الصالات</span>
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li class="nav-item  ">
                        <a href="javascript:" class="nav-link nav-toggle">
                            <i class="icon-users"></i>
                            <span class="title">المستخدمين</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">


                            <li class="nav-item  ">
                                <a href="{{route('Users')}}" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title"> إدارة مستخدمين </span>
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li class="nav-item  ">
                        <a href="javascript:" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">الإعدادات </span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="{{route('entities')}}" class="nav-link ">
                                    <i class="icon-settings"></i>
                                    <span class="title">إضافة كيان </span>
                                </a>
                            </li>

                            <li class="nav-item  ">
                                <a href="{{route('branches')}}" class="nav-link ">
                                    <i class="fa fa-building"></i>
                                    <span class="title"> إداراة الفروع </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                <li class="nav-item  ">
                    <a href="javascript:" class="nav-link nav-toggle">
                        <i class="icon-social-dribbble"></i>
                        <span class="title">المعلومات</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="{{route('about')}}" class="nav-link ">
                                <i class="icon-info"></i>
                                <span class="title">عن النظام</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{route('contact')}}" class="nav-link ">
                                <i class="icon-call-end"></i>
                                <span class="title">التواصل</span>
                            </a>
                        </li>


                    </ul>
                </li>

            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            <div class="theme-panel">
                <div class="toggler tooltips row" data-container="body" data-placement="left" data-html="true"
                     data-original-title="Click to open advance theme customizer panel">
                    <i class="icon-settings"></i>
                </div>
                <div class="toggler-close">
                    <i class="icon-close"></i>
                </div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
                        <span> THEME COLOR </span>
                        <ul>
                            <li class="color-default current tooltips" data-style="default" data-container="body"
                                data-original-title="Default"></li>
                            <li class="color-grey tooltips" data-style="grey" data-container="body"
                                data-original-title="Grey"></li>
                            <li class="color-blue tooltips" data-style="blue" data-container="body"
                                data-original-title="Blue"></li>
                            <li class="color-dark tooltips" data-style="dark" data-container="body"
                                data-original-title="Dark"></li>
                            <li class="color-light tooltips" data-style="light" data-container="body"
                                data-original-title="Light"></li>
                        </ul>
                    </div>
                    <div class="theme-option">
                        <span> Layout </span>
                        <select class="layout-option form-control input-small">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Header </span>
                        <select class="page-header-option form-control input-small">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Top Dropdown</span>
                        <select class="page-header-top-dropdown-style-option form-control input-small">
                            <option value="light" selected="selected">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Mode</span>
                        <select class="sidebar-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Style</span>
                        <select class="sidebar-style-option form-control input-small">
                            <option value="default" selected="selected">Default</option>
                            <option value="compact">Compact</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Menu </span>
                        <select class="sidebar-menu-option form-control input-small">
                            <option value="accordion" selected="selected">Accordion</option>
                            <option value="hover">Hover</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Position </span>
                        <select class="sidebar-pos-option form-control input-small">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Footer </span>
                        <select class="page-footer-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END THEME PANEL -->

            <!-- Confiramtion Modal modal -->
            <div class="modal fade " tabindex="-1" role="dialog" id="confirmation" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" onclick="confirmationNO()" class="close" data-dismiss="modal"
                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="mySmModalLabel">التأكيد</h4>
                        </div>
                        <div class="modal-body">
                            <div id="confirmation_body">
                                <input type="text" id="confirmation_id" name="" value="" disabled
                                       style="display: none;">

                                <div class="alert alert-warning"><h3><strong>تحذير ! </strong> هل تريد المتابعة ؟</h3>
                                </div>
                                <input type="text" id="confirmedID" name="" readonly style="display: none;">
                                <input type="text" id="confirmationType" name="" value="" disabled
                                       style="display: none;">

                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" onclick="confirmationYes()" name="confirmationBtnYes"
                                    id="confirmationBtnYes" class="btn btn-info" data-dismiss="modal">نعم
                            </button>
                            <button type="button" onclick="confirmationNO()" name="confirmationBtnNO"
                                    id="confirmationBtnNO" class="btn btn-danger" data-dismiss="modal">لا
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Confiramtion Modal modal -->

            <!-- Large modal -->
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="infoModal"
                 aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"> System Info </h4>
                        </div>
                        <div class="modal-body">
                            <div id="infoBody"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" name="" id="" onclick="window.location.reload();"
                                    class="btn btn-danger" data-dismiss="modal">Close
                            </button>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Large modal -->

            <!-- Large modal -->
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="packageModal"
                 aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"> System Info </h4>
                        </div>
                        <div class="modal-body">
                            <div id="packageModalBody"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Large modal -->


            <div id="loader" class="loading">Loading&#8230;</div>

            <script type="text/javascript">

                $(document).ready(function () {
                    $(window).load(function () {
                        $('#loader').remove();
                    });
                });
            </script>
