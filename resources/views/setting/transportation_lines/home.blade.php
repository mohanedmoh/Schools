@extends('templates.default')

@section('content')


    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                خطوط سير التراحيل
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
                    <th>اسم الخط</th>
                    <th>الصفوف المسموحة</th>
                    <th>عملية</th>
                </tr>
                </thead>
                <tbody>


               
                    @foreach ($lines as $line)
                        <tr class=''>
                            <td>{{$line['id']}}</td>
                            <td>{{$line['line_name']}}</td>
                            <td>
                                @foreach($line->Grade as $grade)
                                    {{ $grade['grade']}} .
                                @endforeach
                            </td>
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
                    <a href="#portlet_tab1" data-toggle="tab"> اضافة خط </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="row">
        <div class="tab-content">
            <div class="tab-pane active" id="portlet_tab1">
                @include('setting.transportation_lines.lines')
            </div>

        </div>
    </div>

    <!-- END TAB PORTLET-->

@endsection
