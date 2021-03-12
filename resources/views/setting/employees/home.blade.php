@extends('templates.default')

@section('content')


    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                الموظفين
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>


            </div>
        </div>
        <div class="portlet-body">

            <!--<div class="table-scrollable">-->
            <table dir="rtl" id="sample_1" class="table table-striped table-bordered table-hover">
                <thead>
                <tr class="">
                    <th>رقم</th>
                    <th>الأسم</th>
                    <th>العنوان</th>
                    <th>رقم الهاتف</th>
                    <th>تاريخ الميلاد</th>
                    <th>عنوان الوظيفة</th>
                    <th>عمليات</th>
                </tr>
                </thead>
                <tbody>


              
                    @foreach ($employees as $employee)
                        <tr class=''>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->address}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>{{$employee->b_date}}</td>
                            <td>{{$employee->job->job_title}}</td>
                            <td>
                                <button class='btn btn-sm green-jungle'>SELECT</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <!-- BEGIN TAB PORTLET-->
    <div class="portlet light ">
        <div class="portlet-title tabbable-line">

            <ul class="nav nav-tabs">
                <li>
                    <a href="#portlet_tab1" data-toggle="tab"> اضافة موظف </a>
                </li>


            </ul>
        </div>
    </div>
    <div class="row">
        <div class="tab-content">
            <div class="tab-pane active" id="portlet_tab1">
                @include('setting.employees.newEmployee')

            </div>
        </div>
    </div>

    <!-- END TAB PORTLET-->

@endsection
