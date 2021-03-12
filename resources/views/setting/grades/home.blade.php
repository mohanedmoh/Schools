@extends('templates.default')

@section('content')

@include('templates.partials.messages')

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            الصفوف
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
                    <th>اسم الصف</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($grades as $grade)
                <tr class=''>
                    <td>{{$grade->id}}</td>
                    <td>{{$grade->grade}}</td>
                    <td>
                    <div class="btn-toolbar">
                            <a href="{{route('Grades_edit', Crypt::encrypt($grade->id) )}}" data-toggle="tooltip" data-placement="top" title="Edit Data" class="btn btn-icon-only btn-warning"><span class="fa fa-edit fa-fw"></span></a>
                            <button data-toggle="modal" data-target="#confirmation" data-placement="top" title="Delete" class="btn btn-icon-only btn-danger" onclick="confirmFun('{{$grade->id}}')"><span class="fa fa-times fa-fw"></span>
                            </button>
                        </div>
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
                <a href="#portlet_tab1" data-toggle="tab"> اضافة صف </a>
            </li>

        </ul>
    </div>
</div>
<div class="row">
    <div class="tab-content">
        <div class="tab-pane active" id="portlet_tab1">
            @include('setting.grades.newGrade')
        </div>

    </div>
</div>

<!-- END TAB PORTLET-->

@endsection
<script>
    function confirmFun(id, type) {
        $("#confirmedID").val(id);
        $("#confirmationType").val(type);
    }

    function confirmationNO() {
        $("#confirmedID").val("");
    }

    function confirmationYes() {
        var id = $("#confirmedID").val();
       
        $.ajax({
            url: "{{ url('/Grades_delete') }}",
            method: 'post',
            data: {
                id: id,
                "_token": "{{ csrf_token() }}"
            },
            success: function(result) {

                if (result == 1 ) {
                    $("#infoModal").modal("show");
                    $("#infoBody").html("<div class='alert alert-success'><h3>تم المسح بنجاح</h3></div>");
                } else {
                    $("#infoModal").modal("show");
                    $("#infoBody").html("<div class='alert alert-danger'><h3> حدثت بعض الاخطاء الرجاء المحاولة لاحقا</h3></div>");
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    }
</script>