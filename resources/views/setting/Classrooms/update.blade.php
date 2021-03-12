@extends('templates.default')

@section('content')

@include('templates.partials.messages')

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <h3>تعديل </h3>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>

        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ route('Classrooms_update', Crypt::encrypt($data->id)) }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('classroom_name') ? ' has-error' : '' }}">
                            <label for="classroom_name" class="control-label col-md-3">اسم الفصل</label>
                            <div class="col-md-9">
                                <input type="text" name="classroom_name" value="{{old('classroom_name', $data->classroom_name)}}" id="classroom_name" class="form-control" />

                                @if ($errors->has('classroom_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('classroom_name') }}</strong>
                                </span>
                                @endif

                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
                            <label for='grade' class="control-label col-md-3"> الصف</label>
                            <div class="col-md-9">
                                <select class="form-control" name='grade' id='grade'>
                                    <option value="">اختر</option>
                                    
                                    @foreach ($grades as $grade)
                                    
                                    <option {{ (old('grade',$data->grade_id) == $grade->id) ? 'selected' : '' }}  value="{{$grade->id}}">{{$grade->grade}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('grade'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('grade') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

                <hr />
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">حفظ</button>
                                    <a href="{{url()->previous()}}" class="btn default">تراجع</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>
</div>

@endsection