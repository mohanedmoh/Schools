@extends('templates.default')

@section('content')


    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                مناطق التراحيل
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
                    <th>اسم المنطقة</th>
                    <th>اسم الخط</th>
                    <th>السعر</th>
                    <th>عملية</th>
                </tr>
                </thead>
                <tbody>
              
                    @foreach ($areas as $area)
                        <tr class=''>
                            <td>{{$area['id']}}</td>
                            <td>{{$area['area_name']}}</td>
                            <td>{{$area['transportation_line']['line_name']}}</td>
                            <td>{{$area['area_price'][0]['price']}}</td>
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
                    <a href="#portlet_tab1" data-toggle="tab"> اضافة منطقة </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="row">
        <div class="tab-content">
            <div class="tab-pane active" id="portlet_tab1">
                @include('setting.transportation_areas.areas')
            </div>

        </div>
    </div>

    <!-- END TAB PORTLET-->

@endsection
