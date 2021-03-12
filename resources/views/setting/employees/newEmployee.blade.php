<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <h3>المعلومات الشخصية </h3>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>

        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ url('/newEmployee') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <hr/>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('employee_name') ? ' has-error' : '' }}">
                            <label for="employee_name" class="control-label col-md-3"> اسم الموظف</label>
                            <div class="col-md-9">
                                <input type="text" name="employee_name" id="employee_name" class="form-control"/>

                                @if ($errors->has('employee_name'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('employee_name') }}</strong>
                                                                                </span>
                                @endif

                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('employee_phone') ? ' has-error' : '' }}">
                            <label for="employee_phone" class="control-label col-md-3"> رقم هاتف الموظف</label>
                            <div class="col-md-9">
                                <input type="text" name="employee_phone" id="employee_phone" class="form-control"/>

                                @if ($errors->has('employee_phone'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('employee_phone') }}</strong>
                                                                                </span>
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('employee_address') ? ' has-error' : '' }}">
                            <label for="employee_address" class="control-label col-md-3"> عنوان الموظف</label>
                            <div class="col-md-9">
                                <input type="text" name="employee_address" id="employee_address" class="form-control"/>

                                @if ($errors->has('employee_address'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('employee_address') }}</strong>
                                                                                </span>
                                @endif

                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                            <label for="birth_date" class="control-label col-md-3"> تاريخ الميلاد</label>
                            <div class="col-md-9">
                                <input type="date" name="birth_date" id="birth_date" class="form-control"/>
                                @if ($errors->has('birth_date'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('birth_date') }}</strong>
                                                                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

                <!--/row-->
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('employee_sex') ? ' has-error' : '' }}">
                            <label for='employee_sex' class="control-label col-md-3"> الجنس</label>
                            <div class="col-md-9">
                                <select class="form-control" name='employee_sex' id='employee_sex'>
                                    <option value="">اختر</option>
                                    <option value="1">ذكر</option>
                                    <option value="2">انثى</option>
                                </select>
                                @if ($errors->has('employee_sex'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('employee_sex') }}</strong>
                                                                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('marital_status') ? ' has-error' : '' }}">
                            <label for='marital_status' class="control-label col-md-3"> الحالة الأجتماعية</label>
                            <div class="col-md-9">
                                <select class="form-control" name='marital_status' id='marital_status'>
                                    <option value="">اختر</option>
                                    @if ($marital_statuses->count())
                                        @foreach ($marital_statuses as $marital_status)
                                            <option
                                                value="{{$marital_status->id}}">{{$marital_status->marital_status}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('marital_status'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('marital_status') }}</strong>
                                                                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class='row'>

                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('specialized_subjects') ? ' has-error' : '' }}">
                            <label for="specialized_subjects" class="control-label col-md-3"> مواد التخصص</label>
                            <div class="col-md-9">
                                <input type="text" name="specialized_subjects" id="specialized_subjects"
                                       class="form-control"/>
                                @if ($errors->has('specialized_subjects'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('specialized_subjects') }}</strong>
                                                                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

                <hr/>

                <!--<h3 class="form-section">Address</h3>/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('qualification') ? ' has-error' : '' }}">
                            <label for='qualification' class="control-label col-md-3"> المؤهل</label>
                            <div class="col-md-9">
                                <select class="form-control" name='qualification' id='qualification'>
                                    <option value="">اختر</option>
                                    @if ($qualifications->count())
                                        @foreach ($qualifications as $qualification)
                                            <option
                                                value="{{$qualification->id}}">{{$qualification->qualification}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('qualification'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('qualification') }}</strong>
                                                                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                            <label for='job_title' class="control-label col-md-3"> الوظيفة</label>
                            <div class="col-md-9">
                                <select class="form-control" name='job_title' id='job_title'>
                                    <option value="">اختر</option>
                                    @if ($jobs->count())
                                        @foreach ($jobs as $job)
                                            <option value="{{$job->id}}">{{$job->job_title}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('job_title'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('job_title') }}</strong>
                                                                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

                <!--/row-->


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
