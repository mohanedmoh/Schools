<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">

        </div>
        <div class="tools">


        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ url('/student_leaving') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('leaving_student_id') ? ' has-error' : '' }}">
                            <label for="leaving_student_id" class="control-label col-md-3"> رقم الطالب</label>
                            <div class="col-md-9">
                                <input readonly type="number" name="leaving_student_id" id="leaving_student_id" value="{{ old('leaving_student_id') }}" class="form-control" />
                                @if ($errors->has('leaving_student_id'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('leaving_student_id') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('leaving_student_name') ? ' has-error' : '' }}">
                            <label for="leaving_student_name" class="control-label col-md-3"> اسم الطالب</label>
                            <div class="col-md-9">
                                <input readonly type="text" name="leaving_student_name" id="leaving_student_name" value="{{ old('leaving_student_name') }}" class="form-control" />

                                @if ($errors->has('leaving_student_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('leaving_student_name') }}</strong>
                                </span>
                                @endif

                            </div>

                        </div>
                    </div>

                </div>
                <!--/row-->
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('leaving_student_reason') ? ' has-error' : '' }}">
                            <label for='leaving_student_reason' class="control-label col-md-3"> السبب </label>
                            <div class="col-md-9">
                                <select class="form-control" name='leaving_student_reason' id='leaving_student_reason' value='{{old('leaving_student_reason')}}'>
                                    <option value="">اختر</option>
                                    @if ($reasons_of_leaving->count())
                                    @foreach ($reasons_of_leaving as $reason_of_leaving)
                                    <option value="{{$reason_of_leaving->id}}">{{$reason_of_leaving->title}}</option>
                                    @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('leaving_student_reason'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('leaving_student_reason') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('leaving_student_date') ? ' has-error' : '' }}">
                            <label for='leaving_student_date' class="control-label col-md-3">التاريخ</label>
                            <div class="col-md-9">
                                <input type="date" name='leaving_student_date' id='leaving_student_date' class="form-control" />
                                @if ($errors->has('leaving_student_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('leaving_student_date') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <!--/span-->
                </div>

                <div class='row'>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('leaving_student_comments') ? ' has-error' : '' }}">
                            <label for='leaving_student_comments' class="control-label col-md-3"> التعليق</label>
                            <div class="col-md-9">
                                <input type="text" name='leaving_student_comments' id='leaving_student_comments' class="form-control" />
                                @if ($errors->has('leaving_student_comments'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('leaving_student_comments') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>




                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">حفظ</button>
                                    <button type="reset" class="btn default">مسح</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"> </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>