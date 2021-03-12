@extends('templates.default')

@section('content')


<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            الطلاب
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
                    <th>#</th>
                    <th>الرقم</th>
                    <th>الاسم</th>
                    <th>العنوان</th>
                    <th>الهاتف</th>
                    <th>الموبايل</th>
                    <th>تاريخ الميلاد</th>
                    <th>التاريخ</th>


                </tr>

            </thead>
            <tbody>


               
                @foreach ($pupils as $pupil)
                <tr id="{{$pupil->id}}">
                    <td style='width:120px;'>

                        <div class="btn-group">
                            <button class="btn green-jungle" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                المعاملات
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu bottom-up">
                                <li>
                                    <a href="javascript:;" class='btn btn-sm btn-block ' onclick='putData("{{$pupil->id}}","{{$pupil->student_no}}","{{$pupil->student_name}}")'>اختيار
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class='btn btn-sm btn-block ' onclick=''>تقادير الطالب
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class='btn btn-sm btn-block ' onclick=''>كشف حساب رسوم الترحيل

                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class='btn btn-sm btn-block ' onclick=''>كشف حساب الرسوم الدراسية


                                    </a>
                                </li>

                            </ul>
                        </div>

                    </td>
                    <td>{{$pupil->student_no}}</td>
                    <td>{{$pupil->student_name}}</td>
                    <td>{{$pupil->address}}</td>
                    <td>{{$pupil->phone}}</td>
                    <td>{{$pupil->mobile}}</td>
                    <td>{{$pupil->birth_date}}</td>
                    <td>{{$pupil->created_at}}</td>

                </tr>
                @endforeach


                

            </tbody>
        </table>
        <!--</div>-->
    </div>
</div>
<!-- BEGIN TAB PORTLET-->
<div class="portlet light ">
    <div class="portlet-title tabbable-line">

        <ul dir='rtl' class="nav nav-tabs nav-justified">
            <!-- <li >
                                                    <a href="#portlet_tab1" data-toggle="tab">  الطلاب  </a>
                                                </li>-->
            <li class='active'>
                <a href="#portlet_tab2" data-toggle="tab"> طالب جديد </a>
            </li>
            <li>
                <a href="#portlet_tab3" data-toggle="tab"> بيانات التسجيل </a>
            </li>
            <li>
                <a href="#portlet_tab4" data-toggle="tab"> الأقساط </a>
            </li>
            <li>
                <a href="#portlet_tab5" data-toggle="tab"> رسوم الترحيل </a>
            </li>
            <!--    <li>
                                                    <a href="#portlet_tab6" data-toggle="tab">  سداد الرسوم الدراسية </a>
                                                </li>
                                                <li>
                                                    <a href="#portlet_tab7" data-toggle="tab"> سداد رسوم الترحيل </a>
                                                </li>-->
            <li>
                <a href="#portlet_tab8" data-toggle="tab"> البيانات الصحية </a>
            </li>
            <li>
                <a href="#portlet_tab9" data-toggle="tab"> السلوك والأداء </a>
            </li>
            <!-- <li>
                                                    <a href="#portlet_tab10" data-toggle="tab"> تقادير الطالب </a>
                                                </li>-->
            <li>
                <a href="#portlet_tab11" data-toggle="tab"> ترك المدرسة </a>
            </li>

        </ul>
    </div>
</div>
<div class="row">
    <div class="tab-content">
        <div class="tab-pane " id="portlet_tab1">

            <!--
                                                    <div class="btn-group">
                                                        <a class="btn purple" href="javascript:;" data-toggle="dropdown">
                                                            <i class="fa fa-user"></i> Settings
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu bottom-up">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-plus"></i> Add </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-times"></i> Delete </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Full Settings </a>
                                                            </li>
                                                        </ul>
                                                    </div> -->
        </div>
        <div class="tab-pane active" id="portlet_tab2">
            @include('students.new')

        </div>
        <div class="tab-pane" id="portlet_tab3">
            @include('students.registration')

        </div>
        <div class="tab-pane" id="portlet_tab4">
            <div dir='rtl' style='height:200px;' class='alert alert-success'>المحتويات ستكون هنا4</div>
        </div>
        <div class="tab-pane" id="portlet_tab5">
            <div dir='rtl' style='height:200px;' class='alert alert-success'>5المحتويات ستكون هنا</div>
        </div>
        <div class="tab-pane" id="portlet_tab6">
            <div dir='rtl' style='height:200px;' class='alert alert-success'> there is no content just a printed page</div>
        </div>
        <div class="tab-pane" id="portlet_tab7">
            <div dir='rtl' style='height:200px;' class='alert alert-success'> there is no content just a printed page </div>
        </div>
        <div class="tab-pane" id="portlet_tab8">
            @include('students.health')
        </div>
        <div class="tab-pane" id="portlet_tab9">

            @include('students.behavior')

        </div>
        <div class="tab-pane" id="portlet_tab10">
            <div dir='rtl' style='height:200px;' class='alert alert-success'>المحتويات ستكون هنا</div>
        </div>
        <div class="tab-pane" id="portlet_tab11">
            @include('students.leaving')
        </div>
    </div>
</div>

<!-- END TAB PORTLET-->

@endsection

<script>
    function putData(id, no, name) {

        $('#' + id).addClass("success");
        $('#registration_student_id').val(id);
        $('#registration_student_name').val(name);

        $('#health_student_id').val(id);
        $('#health_student_name').val(name);


        $('#behavior_student_no').val(no);
        $('#behavior_student_name').val(name);

        $('#leaving_student_id').val(id);
        $('#leaving_student_name').val(name);


    }

    function getClassRoom(id) {

        $.ajax({
            url: "{{ url('/getClassRoom') }}",
            method: 'post',
            data: {
                id: id,
                "_token": "{{ csrf_token() }}"
            },
            success: function(result) {
                var options = "<option>اختار</option>";
                var data = JSON.parse(result);
                for (var i = 0; i < data.length; i++) {
                    options += "<option value='" + data[i].id + "'>" + data[i].classroom_name + "</option>";
                }

                $('#registration_classroom').html(options);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    }
</script>