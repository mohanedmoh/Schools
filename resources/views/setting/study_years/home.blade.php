@extends('templates.default')

@section('content')


    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                الاعوام الدراسية
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
                    <th>اسم العام</th>
                    <th>بداية العام</th>
                    <th>نهاية العام</th>
                    <th>الحالة</th>
                    <th>العملية</th>
                </tr>
                </thead>
                <tbody>


               
                    @foreach ($study_years as $study_year)
                        <tr class=''>
                            <td>{{$study_year['id']}}</td>
                            <td>{{$study_year['name']}}</td>
                            <td>{{$study_year['from_date']}}</td>
                            <td>{{$study_year['to_date']}}</td>
                            <td>{{$study_year['status']['status']}}</td>
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
                    <a href="#portlet_tab1" data-toggle="tab"> اضافة عام دراسي </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="row">
        <div class="tab-content">
            <div class="tab-pane active" id="portlet_tab1">
                @include('setting.study_years.newStudyYear')
            </div>

        </div>
    </div>

    <!-- END TAB PORTLET-->

@endsection
