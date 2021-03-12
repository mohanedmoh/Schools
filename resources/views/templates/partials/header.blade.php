 <!-- BEGIN HEADER -->
 <div class="page-header">
     <!-- BEGIN HEADER TOP -->
     <div class="page-header-top">
         <div class="container">
             <!-- BEGIN LOGO -->
             <div>
                 <!--<a href="index.html">
                            <img src="../assets/layouts/layout3/img/logo-default.jpg" alt="logo" class="logo-default">
                        </a> -->
                 <a class="pull-right" style="float: right!important;text-decoration:none;" href="{{url('/')}}">
                     <h1 style="font-size:40px;color:#1BBC9B;">نظام إدارة المدارس الشامل</h1>
                 </a>
             </div>
             <!-- END LOGO -->
             <!-- BEGIN RESPONSIVE MENU TOGGLER -->
             <a href="javascript:;" class="menu-toggler"></a>
             <!-- END RESPONSIVE MENU TOGGLER -->
             <!-- BEGIN TOP NAVIGATION MENU -->
             <div class="top-menu">
                 <ul class="nav navbar-nav pull-right">

                     <!-- BEGIN USER LOGIN DROPDOWN -->
                     <!--  <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="../assets/layouts/layout3/img/avatar9.jpg">
                                    <span class="username username-hide-mobile"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                   
                                    <li>
                                        <a hef="#" onclick="logOut();">
                                            <i class="icon-key"></i> تسجيل الخروج </a>
                                    </li>
                                </ul>
                            </li> -->
                     <!-- END USER LOGIN DROPDOWN -->
                     <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                     <li class="dropdown dropdown-extended quick-sidebar-toggler">
                         <span class="sr-only">Toggle Quick Sidebar</span>
                         <i data-toggle='title' title='Log out' onclick='logOut();' class="icon-logout"></i>
                     </li>
                     <!-- END QUICK SIDEBAR TOGGLER -->
                 </ul>
             </div>
             <!-- END TOP NAVIGATION MENU -->
         </div>
     </div>
     <!-- END HEADER TOP -->
     <!-- BEGIN HEADER MENU -->
     <div class="page-header-menu">
         <div class="container">

             <!-- END HEADER SEARCH BOX -->
             <!-- BEGIN MEGA MENU -->
             <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
             <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
             <div class="hor-menu  ">
                 <ul dir="rtl" class="nav navbar-nav">
                     <li class="menu-dropdown classic-menu-dropdown ">
                         <a href="javascript:;"> الطلاب
                             <span class="arrow"></span>
                         </a>
                         <ul class="dropdown-menu ">
                             <li class=" ">
                                 <a href="{{route('Students_files')}}" class="nav-link  ">
                                     ملفات الطلاب

                                 </a>
                             </li>
                             <li class=" ">
                                 <a href="{{route('Students_social')}}" class="nav-link  ">
                                     الملف الإجتماعي

                                 </a>
                             </li>
                         </ul>
                     </li>


                     <li class="menu-dropdown mega-menu-dropdown  mega-menu-full">
                         <a href="javascript:;"> الإعدادات
                             <span class="arrow"></span>
                         </a>
                         <ul class="dropdown-menu" style="min-width: ">
                             <li>
                                 <div class="mega-menu-content">
                                     <div class="row">
                                         <div class="col-md-3">
                                             <ul class="mega-menu-submenu">
                                                 <li>
                                                     <h3>Components 1</h3>
                                                 </li>
                                                 <li>
                                                     <a href="{{url('/grades')}}" class="nav-link  ">الصفوف</a>
                                                 </li>
                                                 <li>
                                                     <a href="{{url('/classrooms')}}" class="nav-link  ">الفصول</a>
                                                 </li>

                                             </ul>
                                         </div>
                                         <div class="col-md-3">
                                             <ul class="mega-menu-submenu">
                                                 <li>
                                                     <h3>Components 2</h3>
                                                 </li>

                                                 <li>
                                                     <a href="{{url('/jobs')}}" class="nav-link  ">الوظائف</a>
                                                 </li>
                                                 <li>
                                                     <a href="{{url('/employees')}}" class="nav-link  ">الموظفين</a>
                                                 </li>
                                                 <li>
                                                     <a href="{{url('/qualifications')}}" class="nav-link  ">المؤهلات الدراسية</a>
                                                 </li>
                                                 <li>
                                                     <a href="{{url('/Classroom_supervisors')}}" class="nav-link  ">الأشراف</a>
                                                 </li>

                                             </ul>
                                         </div>
                                         <div class="col-md-3">
                                             <ul class="mega-menu-submenu">
                                                 <li>
                                                     <h3>Components 3</h3>
                                                 </li>
                                                 <li>
                                                     <a href="{{url('/transportation_lines')}}" class="nav-link  ">خطوط التراحيل</a>
                                                 </li>
                                                 <li>
                                                     <a href="{{url('/transportation_areas')}}" class="nav-link  ">مناطق التراحيل</a>
                                                 </li>
                                                 <li>
                                                     <a href="{{url('/drivers')}}" class="nav-link  ">الرحالين</a>
                                                 </li>

                                             </ul>
                                         </div>
                                         <div class="col-md-3">
                                             <ul class="mega-menu-submenu">
                                                 <li>
                                                     <h3>Components 4</h3>
                                                 </li>
                                                 <li>
                                                     <a href="{{url('/subjects')}}" class="nav-link  ">المواد</a>
                                                 </li>
                                                 <li>
                                                     <a href="{{url('/feesTypes')}}" class="nav-link  ">انواع الرسوم</a>
                                                 </li>
                                                 <li>
                                                     <a href="{{url('/studyYears')}}" class="nav-link  ">الأعوام الدراسة</a>
                                                 </li>

                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </div>
             <!-- END MEGA MENU -->
         </div>
     </div>
     <!-- END HEADER MENU -->
 </div>
 <!-- BEGIN CONTAINER -->
 <div class="page-container">
     <!-- BEGIN CONTENT -->
     <div class="page-content-wrapper">
         <!-- BEGIN CONTENT BODY -->
         <!-- BEGIN PAGE HEAD-->

         <!-- END PAGE HEAD-->
         <div class="page-content">
             <div class="container">
                 <!-- BEGIN PAGE BREADCRUMBS -->

                 <!-- BEGIN PAGE CONTENT INNER -->
                 <!-- Confiramtion Modal modal -->
                 <!-- Large modal -->
                 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="infoModal" aria-labelledby="myLargeModalLabel">
                     <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                             <div dir="rtl" class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <h4 class="modal-title" id="myModalLabel">معلومات النظام </h4>
                             </div>
                             <div dir="rtl" class="modal-body">
                                 <div id="infoBody"> </div>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" name="" id="" onclick="window.location.reload();" class="btn green-jungle" data-dismiss="modal">تم</button>


                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Large modal -->

                 <div class="modal fade bs-modal-lg" tabindex="-1" id="confirmation" role="dialog" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                             <div dir="rtl" class="modal-header">
                                 <button type="button" onclick="confirmationNO()" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                 <h4 class="modal-title">التأكيد </h4>
                             </div>
                             <div dir="rtl" class="modal-body">
                                 <div id="confirmation_body">

                                     <div class="alert alert-warning">
                                         <h3><strong>تحذير!</strong> هل أنت متأكد من المتابعة ؟</h3>
                                     </div>
                                     <input type="text" id="confirmedID" name="" readonly style="display: none;">
                                 </div>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" onclick="confirmationYes()" name="confirmationBtnYes" id="confirmationBtnYes" class="btn btn-info" data-dismiss="modal">نعم</button>
                                 <button type="button" onclick="confirmationNO()" name="confirmationBtnNO" id="confirmationBtnNO" class="btn btn-danger" data-dismiss="modal">لا</button>
                             </div>
                         </div>
                         <!-- /.modal-content -->
                     </div>
                     <!-- /.modal-dialog -->
                 </div>

                 <div id="loader" class="loading">Loading&#8230;</div>

                 <script type="text/javascript">
                     $(document).ready(function() {
                         $(window).load(function() {
                             $('#loader').remove();
                         });
                     });
                 </script>