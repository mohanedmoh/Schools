<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <h3>صف جديد</h3>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>

        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ url('/newSupervisor') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <hr/>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('employee') ? ' has-error' : '' }}">
                            <label for='employee' class="control-label col-md-3"> المشرف</label>
                            <div class="col-md-9">
                                <select class="form-control" name='employee' id='employee'>
                                    <option value="">اختر</option>
                                    @if ($employees->count())
                                        @foreach ($employees as $employee)
                                            <option value="{{$employee->id}}">{{$employee->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('employee'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('employee') }}</strong>
                                                                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
                            <label for='grade' class="control-label col-md-3"> الصف</label>
                            <div class="col-md-9">
                                <select class="form-control" name='grade' id='grade'
                                        onChange="getClassRoom(this.value)">
                                    <option value="">اختر</option>
                                    @if ($grades->count())
                                        @foreach ($grades as $grade)
                                            <option value="{{$grade->id}}">{{$grade->grade}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('grade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('grade') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('classrooms') ? ' has-error' : '' }}">
                            <label for='classrooms' class="control-label col-md-3"> الفصل</label>
                            <div class="col-md-9">
                                <select class="form-control" name='classrooms' id='classrooms'>
                                    <option value="">إختار</option>
                                </select>
                                @if ($errors->has('classrooms'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('classrooms') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <hr/>
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
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>
</div>
