@extends('templates.default')

@section('content')


    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                مشرفي الفصول
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
                    <th>اسم المشرف</th>
                    <th>اسم الفصل</th>
                    <th>السنة الدراسية</th>
                    <th>العملية</th>
                </tr>
                </thead>
                <tbody>
                
                    @foreach ($supervisors as $supervisor)
                        <tr class=''>
                            <td>{{$supervisor['id']}}</td>
                            <td>{{$supervisor['employee']['name']}}</td>
                            <td>{{$supervisor['classroom']['classroom_name']}}</td>
                            <td>{{$supervisor['study_year']['name']}}</td>
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
                    <a href="#portlet_tab1" data-toggle="tab"> اضافة مشرف </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="row">
        <div class="tab-content">
            <div class="tab-pane active" id="portlet_tab1">
                @include('setting.classroom_supervisors.newSupervisor')
            </div>

        </div>
    </div>
    <!-- END TAB PORTLET-->
@endsection
<script>
    function getClassRoom(id) {

        $.ajax({
            url: "{{ url('/getClassRoom') }}",
            method: 'post',
            data: {id: id, "_token": "{{ csrf_token() }}"},
            success: function (result) {
                var options = "<option>اختار</option>";
                var data = JSON.parse(result);
                for (var i = 0; i < data.length; i++) {
                    options += "<option value='" + data[i].id + "'>" + data[i].classroom_name + "</option>";
                }

                $('#classrooms').html(options);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    }
</script>
