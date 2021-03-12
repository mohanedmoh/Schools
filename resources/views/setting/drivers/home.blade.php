@extends('templates.default')

@section('content')


    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                الرحالين
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
                    <th>اسم السائق</th>
                </tr>
                </thead>
                <tbody>


                @if ($drivers->count())
                    @foreach ($drivers as $driver)
                        <tr class=''>
                            <td>{{$driver->id}}</td>
                            <td>{{$driver->name}}</td>
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
                    <a href="#portlet_tab1" data-toggle="tab"> اضافة رحال </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="row">
        <div class="tab-content">
            <div class="tab-pane active" id="portlet_tab1">
                @include('setting.setting.drivers.newDriver')
            </div>

        </div>
    </div>

    <!-- END TAB PORTLET-->

@endsection
