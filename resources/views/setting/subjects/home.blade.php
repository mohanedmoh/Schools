@extends('templates.default')

@section('content')


    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                المواد
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
                    <th>اسم المادة</th>
                    <th>الصف</th>
                    <th>نوع المادة</th>
                    <th>ترتيب المادة</th>
                    <th>العملية</th>
                </tr>
                </thead>
                <tbody>
               
                    @foreach ($subjects as $subject)
                        <tr class=''>
                            <td>{{$subject['id']}}</td>
                            <td>{{$subject['name']}}</td>
                            <td>{{$subject['grade']['grade']}}</td>
                            <td>{{$subject['subject_type']['type']}}</td>
                            <td>{{$subject['subject_order']}}</td>
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
                    <a href="#portlet_tab1" data-toggle="tab"> اضافة مادة </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="row">
        <div class="tab-content">
            <div class="tab-pane active" id="portlet_tab1">
                @include('setting.subjects.newSubject')
            </div>

        </div>
    </div>

    <!-- END TAB PORTLET-->

@endsection
