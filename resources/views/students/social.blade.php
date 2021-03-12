@extends('templates.default')

@section('content')
@include('templates.partials.messages')
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


                @if ($pupils->count())
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


                @endif

            </tbody>
        </table>
        <!--</div>-->
    </div>
</div>
<!-- BEGIN TAB PORTLET-->

<!-- BEGIN TAB PORTLET-->
<div class="portlet light ">
    <div class="portlet-title tabbable-line">

        <ul class="nav nav-tabs nav-justified">



            <li>
                <a href="#portlet_tab4" data-toggle="tab"> الأسرة </a>
            </li>

            <li>
                <a href="#portlet_tab3" data-toggle="tab"> الأخوان </a>
            </li>

            <li>
                <a href="#portlet_tab2" data-toggle="tab"> الأم </a>
            </li>

            <li class='active'>
                <a href="#portlet_tab1" data-toggle="tab"> الأب </a>
            </li>

        </ul>
    </div>
</div>





<div class="row">
    <div class="tab-content">
        <div class="tab-pane active " id="portlet_tab1">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        الأباء
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
                                <th>تاريخ الميلاد</th>
                                <th>الحالة</th>
                                <th>التعليم</th>
                                <th>المهنه</th>
                                <th>الهاتف</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($fathers as $father)
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


                                        </ul>
                                    </div>

                                </td>
                                <td>{{$father->id}}</td>
                                <td>{{$father->name}}</td>
                                <td>{{$father->birth_date}}</td>
                                <td>{{($father->is_alive == 0)? 'ميت' : 'حي'}}</td>
                                <td>{{$father->education}}</td>
                                <td>{{$father->job}}</td>
                                <td>{{$father->phone}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--</div>-->
                </div>
            </div>

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>

                    </div>
                </div>
                <div dir="rtl" class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{url('/social_father')}}" method="post" class="form-horizontal">
                        <div class="form-body">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('father_student_id') ? ' has-error' : '' }}">
                                <label for='father_student_id' class="col-md-offset-1 col-md-3 control-label">المتسلسل </label>
                                <div class="col-md-4">
                                    <input type="number" name='father_student_id' id="father_student_id" value="{{old('father_student_id')}}" readonly class="form-control input-circle">
                                    @if ($errors->has('father_student_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father_student_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('father_student_name') ? ' has-error' : '' }}">
                                <label for='father_student_name' class="col-md-offset-1 col-md-3 control-label">اسم الطالب </label>
                                <div class="col-md-4">
                                    <input type="text" name='father_student_name' id="father_student_name" value="{{old('father_student_name')}}" readonly class="form-control input-circle">
                                    @if ($errors->has('father_student_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father_student_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('father_name') ? ' has-error' : '' }}">
                                <label for='father_name' class="col-md-offset-1 col-md-3 control-label">اسم الوالد</label>
                                <div class="col-md-4">
                                    <input type="text" name='father_name' id="father_name" value="{{old('father_name')}}" class="form-control input-circle">
                                    @if ($errors->has('father_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('father_birth_date') ? ' has-error' : '' }}">
                                <label for="father_birth_date" class="col-md-offset-1 col-md-3 control-label">تاريخ الميلاد</label>
                                <div class="col-md-4">
                                    <input type="date" name="father_birth_date" id="father_birth_date" value="{{old('father_birth_date')}}" class="form-control input-circle">
                                    @if ($errors->has('father_birth_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father_birth_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('father_is_alive') ? ' has-error' : '' }}">
                                <label for='father_is_alive' class="col-md-offset-1 control-label col-md-3">علي قيد الحياة </label>
                                <div class="col-md-4">
                                    <select class="form-control input-circle" name='father_is_alive' value="{{old('father_is_alive')}}" id='father_is_alive'>
                                        <option value="">ختار</option>
                                        <option value="1">نعم</option>
                                        <option value="0">لا</option>
                                    </select>
                                    @if ($errors->has('father_is_alive'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father_is_alive') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('father_education') ? ' has-error' : '' }}">
                                <label for="father_education" class="col-md-offset-1 col-md-3 control-label">المستوى التعليمي </label>
                                <div class="col-md-4">
                                    <input type="text" name="father_education" id="father_education" value="{{old('father_education')}}" class="form-control input-circle">
                                    @if ($errors->has('father_education'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father_education') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('father_job') ? ' has-error' : '' }}">
                                <label for="father_job" class="col-md-offset-1 col-md-3 control-label">المهنة </label>
                                <div class="col-md-4">
                                    <input type="text" name="father_job" id="father_job" value="{{old('father_job')}}" class="form-control input-circle">
                                    @if ($errors->has('father_job'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father_job') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('father_phone') ? ' has-error' : '' }}">
                                <label for="father_phone" class="col-md-offset-1 col-md-3 control-label">الهاتف </label>
                                <div class="col-md-4">
                                    <input type="text" name="father_phone" id="father_phone" value="{{old('father_phone')}}" class="form-control input-circle">
                                    @if ($errors->has('father_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father_phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-circle green">حفظ</button>
                                    <button type="reset" class="btn btn-circle grey-salsa btn-outline">مسح</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>


        </div> <!-- end of dad tab -->
        <div class="tab-pane " id="portlet_tab2">

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>

                    </div>
                </div>
                <div dir="rtl" class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{route('Social_mother')}}" method="post" class="form-horizontal">
                        <div class="form-body">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('mother_student_id') ? ' has-error' : '' }}">
                                <label for='mother_student_id' class="col-md-offset-1 col-md-3 control-label">المتسلسل </label>
                                <div class="col-md-4">
                                    <input type="number" name='mother_student_id' id="mother_student_id" value="{{old('mother_student_id')}}" readonly class="form-control input-circle">
                                    @if ($errors->has('mother_student_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mother_student_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mother_student_name') ? ' has-error' : '' }}">
                                <label for='mother_student_name' class="col-md-offset-1 col-md-3 control-label">اسم الطالب </label>
                                <div class="col-md-4">
                                    <input type="text" name='mother_student_name' id="mother_student_name" value="{{old('mother_student_name')}}" readonly class="form-control input-circle">
                                    @if ($errors->has('mother_student_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mother_student_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('mother_name') ? ' has-error' : '' }}">
                                <label for='mother_name' class="col-md-offset-1 col-md-3 control-label"> اسم الوالدة</label>
                                <div class="col-md-4">
                                    <input type="text" name='mother_name' id="mother_name" class="form-control input-circle">
                                    @if ($errors->has('mother_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mother_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mother_birth_date') ? ' has-error' : '' }}">
                                <label for="mother_birth_date" class="col-md-offset-1 col-md-3 control-label">تاريخ الميلاد</label>
                                <div class="col-md-4">
                                    <input type="date" name="mother_birth_date" id="mother_birth_date" class="form-control input-circle">
                                    @if ($errors->has('mother_birth_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mother_birth_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mother_is_alive') ? ' has-error' : '' }}">
                                <label for='mother_is_alive' class="col-md-offset-1 control-label col-md-3">علي قيد الحياة </label>
                                <div class="col-md-4">
                                    <select class="form-control input-circle" name='mother_is_alive' id='mother_is_alive'>
                                        <option value="1">ختار</option>
                                        <option value="1">نعم</option>
                                        <option value="0">لا</option>
                                    </select>
                                    @if ($errors->has('mother_is_alive'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mother_is_alive') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('mother_education') ? ' has-error' : '' }}">
                                <label for="mother_education" class="col-md-offset-1 col-md-3 control-label">المستوى التعليمي </label>
                                <div class="col-md-4">
                                    <input type="text" name="mother_education" id="mother_education" class="form-control input-circle">
                                    @if ($errors->has('mother_education'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mother_education') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mother_job') ? ' has-error' : '' }}">
                                <label for="mother_job" class="col-md-offset-1 col-md-3 control-label">المهنة </label>
                                <div class="col-md-4">
                                    <input type="text" name="mother_job" id="mother_job" class="form-control input-circle">
                                    @if ($errors->has('mother_job'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mother_job') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mother_phone') ? ' has-error' : '' }}">
                                <label for="mother_phone" class="col-md-offset-1 col-md-3 control-label">الهاتف </label>
                                <div class="col-md-4">
                                    <input type="text" name="mother_phone" id="mother_phone" class="form-control input-circle">
                                    @if ($errors->has('mother_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mother_phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-circle green">حفظ</button>
                                    <button type="reset" class="btn btn-circle grey-salsa btn-outline">مسح</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
        <div class="tab-pane" id="portlet_tab3">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>

                    </div>
                </div>
                <div dir="rtl" class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="#" class="form-horizontal">
                        <div class="form-body">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('brother_student_id') ? ' has-error' : '' }}">
                                <label for='brother_student_id' class="col-md-offset-1 col-md-3 control-label">المتسلسل </label>
                                <div class="col-md-4">
                                    <input type="number" name='brother_student_id' id="brother_student_id" value="{{old('brother_student_id')}}" readonly class="form-control input-circle">
                                    @if ($errors->has('brother_student_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brother_student_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('brother_student_name') ? ' has-error' : '' }}">
                                <label for='brother_student_name' class="col-md-offset-1 col-md-3 control-label">اسم الطالب </label>
                                <div class="col-md-4">
                                    <input type="text" name='brother_student_name' id="brother_student_name" value="{{old('brother_student_name')}}" readonly class="form-control input-circle">
                                    @if ($errors->has('brother_student_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brother_student_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('brother_name') ? ' has-error' : '' }}">
                                <label for='brother_name' class="col-md-offset-1 col-md-3 control-label"> اسم الاخ/الاخت </label>
                                <div class="col-md-4">
                                    <input type="text" name='brother_name' id="brother_name" class="form-control input-circle">
                                    @if ($errors->has('brother_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brother_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('brother_birth_date') ? ' has-error' : '' }}">
                                <label for="brother_birth_date" class="col-md-offset-1 col-md-3 control-label">تاريخ الميلاد</label>
                                <div class="col-md-4">
                                    <input type="date" name="brother_birth_date" id="brother_birth_date" class="form-control input-circle">
                                    @if ($errors->has('brother_birth_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brother_birth_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('brother_education') ? ' has-error' : '' }}">
                                <label for="brother_education" class="col-md-offset-1 col-md-3 control-label">المستوى التعليمي </label>
                                <div class="col-md-4">
                                    <input type="text" name="brother_education" id="brother_education" class="form-control input-circle">
                                    @if ($errors->has('brother_education'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brother_education') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-circle green">حفظ</button>
                                    <button type="reset" class="btn btn-circle grey-salsa btn-outline">مسح</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>

        </div>
        <div class="tab-pane" id="portlet_tab4">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>

                    </div>
                </div>
                <div dir="rtl" class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="#" class="form-horizontal">
                        <div class="form-body">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('family_student_id') ? ' has-error' : '' }}">
                                <label for='family_student_id' class="col-md-offset-1 col-md-3 control-label">المتسلسل </label>
                                <div class="col-md-4">
                                    <input type="number" name='family_student_id' id="family_student_id" value="{{old('family_student_id')}}" readonly class="form-control input-circle">
                                    @if ($errors->has('family_student_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('family_student_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('family_student_name') ? ' has-error' : '' }}">
                                <label for='family_student_name' class="col-md-offset-1 col-md-3 control-label">اسم الطالب </label>
                                <div class="col-md-4">
                                    <input type="text" name='family_student_name' id="family_student_name" value="{{old('family_student_name')}}" readonly class="form-control input-circle">
                                    @if ($errors->has('family_student_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('family_student_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('brother_name') ? ' has-error' : '' }}">
                                <label for='brother_name' class="col-md-offset-1 col-md-3 control-label"> السكن </label>
                                <div class="col-md-4">
                                    <input type="text" name='brother_name' id="brother_name" class="form-control input-circle">
                                    @if ($errors->has('brother_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brother_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('father_is_alive') ? ' has-error' : '' }}">
                                <label for='father_is_alive' class="col-md-offset-1 control-label col-md-3">وضع الاسرة </label>
                                <div class="col-md-4">
                                    <select class="form-control input-circle" name='father_is_alive' id='father_is_alive'>
                                        <option value="1">ختار</option>
                                        <option value="1">نعم</option>
                                        <option value="0">لا</option>
                                    </select>
                                    @if ($errors->has('father_is_alive'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father_is_alive') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('father_is_alive') ? ' has-error' : '' }}">
                                <label for='father_is_alive' class="col-md-offset-1 control-label col-md-3"> الحالة الاقتصادية </label>
                                <div class="col-md-4">
                                    <select class="form-control input-circle" name='father_is_alive' id='father_is_alive'>
                                        <option value="1">ختار</option>
                                        <option value="1">نعم</option>
                                        <option value="0">لا</option>
                                    </select>
                                    @if ($errors->has('father_is_alive'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father_is_alive') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>


                            <div class="form-group{{ $errors->has('brother_education') ? ' has-error' : '' }}">
                                <label for="brother_education" class="col-md-offset-1 col-md-3 control-label">ملاحظات </label>
                                <div class="col-md-4">
                                    <input type="text" name="brother_education" id="brother_education" class="form-control input-circle">
                                    @if ($errors->has('brother_education'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brother_education') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-circle green">حفظ</button>
                                    <button type="reset" class="btn btn-circle grey-salsa btn-outline">مسح</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>

    </div>
</div>

<!-- END TAB PORTLET-->

@endsection
<script>
    function putData(id, no, name) {
        $('#father_student_id').val(id);
        $('#father_student_name').val(name);

        $('#mother_student_id').val(id);
        $('#mother_student_name').val(name);

        $('#brother_student_id').val(id);
        $('#brother_student_name').val(name);

        $('#family_student_id').val(id);
        $('#family_student_name').val(name);




    }
</script>