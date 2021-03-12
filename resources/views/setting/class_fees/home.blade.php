@extends('templates.default')

@section('content')


    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                رسوم الفصل
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
                    <th>الصف</th>
                    <th>اسم الرسوم</th>
                    <th>قيمة الرسوم</th>
                    <th>نوع الرسوم</th>
                    <th>عملية</th>
                </tr>
                </thead>
                <tbody>


                @if ($classFees->count())
                    @foreach ($classFees as $classFee)
                        <tr class=''>
                            <td>{{$classFee['id']}}</td>
                            <td>{{$classFee['grade']['grade']}}</td>
                            <td>{{$classFee['fees_type']['type']}}</td>
                            <td>{{$classFee['fee_value']}}</td>
                            <td>{{$classFee['fees_type']['fees_cat']['name']}}</td>
                            <td>
                                <button class='btn btn-sm green-jungle'>SELECT</button>
                            </td>
                        </tr>
                    @endforeach

                @else
                    <td>No data</td>
                @endif


                </tbody>
            </table>
        </div>
    </div>




    <!-- BEGIN TAB PORTLET-->
    <div class="portlet light ">
        <div class="portlet-title tabbable-line">

            <ul class="nav nav-tabs">
                <li>
                    <a href="#portlet_tab1" data-toggle="tab"> اضافة رسوم </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="row">
        <div class="tab-content">
            <div class="tab-pane active" id="portlet_tab1">
                @include('setting.class_fees.newClassFees')
            </div>

        </div>
    </div>

    <!-- END TAB PORTLET-->

@endsection
