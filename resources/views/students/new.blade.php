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
        <form action="{{ url('/newStudent') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('student_no') ? ' has-error' : '' }}">
                            <label for="student_no" class="control-label col-md-3"> رقم الطالب</label>
                            <div class="col-md-9">
                                <input type="number" name="student_no" id="student_no" value="{{old('student_no') }}" class="form-control" />
                                @if ($errors->has('student_no'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('student_no') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('student_name') ? ' has-error' : '' }}">
                            <label for="student_name" class="control-label col-md-3"> اسم الطالب</label>
                            <div class="col-md-9">
                                <input type="text" name="student_name" id="student_name" value="{{ old('student_name') }}" class="form-control" />

                                @if ($errors->has('student_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('student_name') }}</strong>
                                </span>
                                @endif

                            </div>

                        </div>
                    </div>
                    <!--/span
                                            <div class="col-md-6">
                                                <div class="form-group has-error">
                                                    <label class="control-label col-md-3">Last Name</label>
                                                    <div class="col-md-9">
                                                        <select name="foo" class="form-control">
                                                            <option value="1">Option 1</option>
                                                            <option value="1">Option 2</option>
                                                            <option value="1">Option 3</option>
                                                        </select>
                                                        <span class="help-block"> This field has error. </span>
                                                    </div>
                                                </div>
                                            </div>
                                            /span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('school_bus_type') ? ' has-error' : '' }}">
                            <label for='school_bus_type' class="control-label col-md-3">نوع الترحيل</label>
                            <div class="col-md-9">
                                <select class="form-control" name='school_bus_type' value="{{ old('school_bus_type') }}" id='school_bus_type'>
                                    <option value="">اختار</option>
                                    
                                    @foreach ($transportation_types as $transportation_type)
                                    <option value="{{$transportation_type->id}}">{{$transportation_type->title}}</option>
                                    @endforeach
                                    
                                </select>
                                @if ($errors->has('school_bus_type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('school_bus_type') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('student_address') ? ' has-error' : '' }}">
                            <label for='student_address' class="control-label col-md-3">العنوان</label>
                            <div class="col-md-9">
                                <input type="text" name='student_address' id='student_address' value="{{ old('student_address') }}" class="form-control" />
                                @if ($errors->has('student_address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('student_address') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('student_phone') ? ' has-error' : '' }}">
                            <label for="student_phone" class="control-label col-md-3"> تلفون الطالب</label>
                            <div class="col-md-9">
                                <input type="number" name="student_phone" id="student_phone" value="{{ old('student_phone') }}" class="form-control" />
                                @if ($errors->has('student_phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('student_phone') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('student_mobile') ? ' has-error' : '' }}">
                            <label for="student_mobile" class="control-label col-md-3"> موبايل الطالب</label>
                            <div class="col-md-9">
                                <input type="number" name="student_mobile" id="student_mobile" value="{{ old('student_mobile') }}" class="form-control" />
                                @if ($errors->has('student_mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('student_mobile') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <!--/span-->
                </div>
                <div class='row'>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                            <label for="birth_date" class="control-label col-md-3"> تاريخ الميلاد</label>
                            <div class="col-md-9">
                                <input type="date" name="birth_date" id="birth_date" value="{{ old('birth_date') }}" class="form-control" />
                                @if ($errors->has('birth_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('birth_date') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                            <label for='area' class="control-label col-md-3"> المنطقة</label>
                            <div class="col-md-9">
                                <select class="form-control" name='area' id='area' value="{{ old('area') }}">
                                    <option value="">اختر</option>
                                    <option value="1">امدرمان</option>
                                    <option value="2">الخرطوم</option>
                                </select>
                                @if ($errors->has('area'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('area') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <!--<div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                                                    <label for="area" class="control-label col-md-3">   المنطقة</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="area" id="area" class="form-control" />
                                                        @if ($errors->has('area'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('area') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                        
                                                </div>
                                            </div>-->
                </div>

                <hr />

                <!--<h3 class="form-section">Address</h3>/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('responsable_name') ? ' has-error' : '' }}">
                            <label for='responsable_name' class="control-label col-md-3"> اسم ولي الأمر</label>
                            <div class="col-md-9">
                                <input type="text" name='responsable_name' id='responsable_name' value="{{ old('responsable_name') }}" class="form-control" />

                                @if ($errors->has('responsable_name'))
                                <span class="help-block pull-left">
                                    <strong>{{ $errors->first('responsable_name') }}</strong>
                                </span>
                                @endif

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('responsable_relation') ? ' has-error' : '' }}">
                            <label for='responsable_relation' class="control-label col-md-3">علاقته بالطالب</label>
                            <div class="col-md-9">
                                <input type="text" name='responsable_relation' id='responsable_relation' value="{{ old('responsable_relation') }}" class="form-control" />
                                @if ($errors->has('responsable_relation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('responsable_relation') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('responsable_address') ? ' has-error' : '' }}">
                            <label for='responsable_address' class="control-label col-md-3">عنوان ولي الامر</label>
                            <div class="col-md-9">
                                <input type="text" name='responsable_address' id='responsable_address' value="{{ old('responsable_address') }}" class="form-control" />
                                @if ($errors->has('responsable_address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('responsable_address') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>

                    </div>

                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('responsable_phone') ? ' has-error' : '' }}">
                            <label for="responsable_phone" class="control-label col-md-3"> تلفون ولي الامر</label>
                            <div class="col-md-9">
                                <input type="number" name="responsable_phone" id="responsable_phone" value="{{ old('responsable_phone') }}" class="form-control" />
                                @if ($errors->has('responsable_phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('responsable_phone') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('responsable_mobile') ? ' has-error' : '' }}">
                            <label for="responsable_mobile" class="control-label col-md-3"> موبايل ولي الامر</label>
                            <div class="col-md-9">
                                <input type="text" name="responsable_mobile" id="responsable_mobile" value="{{ old('responsable_mobile') }}" class="form-control" />
                                @if ($errors->has('responsable_mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('responsable_mobile') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <!--/row-->

                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('emergency_phone') ? ' has-error' : '' }}">
                            <label for="emergency_phone" class="control-label col-md-3"> هاتف الطوارئ</label>
                            <div class="col-md-9">
                                <input type="number" name="emergency_phone" id="emergency_phone" value="{{ old('emergency_phone') }}" class="form-control" />
                                @if ($errors->has('emergency_phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('emergency_phone') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('emergency_phone_name') ? ' has-error' : '' }}">
                            <label for="emergency_phone_name" class="control-label col-md-3"> اسم صاحب هاتف الطوارئ </label>
                            <div class="col-md-9">
                                <input type="text" name="emergency_phone_name" id="emergency_phone_name" value="{{ old('emergency_phone_name') }}" class="form-control" />
                                @if ($errors->has('emergency_phone_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('emergency_phone_name') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <!--/row-->


                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('emergency_phone_2') ? ' has-error' : '' }}">
                            <label for="emergency_phone_2" class="control-label col-md-3"> هاتف الطوارئ 2</label>
                            <div class="col-md-9">
                                <input type="number" name="emergency_phone_2" id="emergency_phone_2" value="{{ old('emergency_phone_2') }}" class="form-control">
                                @if ($errors->has('emergency_phone_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('emergency_phone_2') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('emergency_phone_name_2') ? ' has-error' : '' }}">
                            <label for="emergency_phone_name_2" class="control-label col-md-3"> 2 اسم صاحب هاتف الطوارئ </label>
                            <div class="col-md-9">
                                <input type="text" name="emergency_phone_name_2" id="emergency_phone_name_2" value="{{ old('emergency_phone_name_2') }}" class="form-control">
                                @if ($errors->has('emergency_phone_name_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('emergency_phone_name_2') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <!--/row-->


                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('is_transferred') ? ' has-error' : '' }}">
                            <label for='is_transferred' class="control-label col-md-3"></label>
                            <div class="col-md-9">
                                <div class="radio-list">
                                    <label class="radio-inline">
                                        <input type="radio" name="is_transferred" id='is_transferred' value="{{ old('is_transferred') }}" value="1" /> محول </label>
                                    @if ($errors->has('is_transferred'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_transferred') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('reason_of_leaving') ? ' has-error' : '' }}">
                            <label for="reason_of_leaving" class="control-label col-md-3"> اسباب ترك المدرسة السابفة</label>
                            <div class="col-md-9">
                                <input type="text" name="reason_of_leaving" id="reason_of_leaving" value="{{ old('reason_of_leaving') }}" class="form-control">
                                @if ($errors->has('reason_of_leaving'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('reason_of_leaving') }}</strong>
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
                        <div class="col-md-6"> </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>