<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <h3>مادة جديد</h3>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>

        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ url('/newSubject') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <hr/>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('subject_name') ? ' has-error' : '' }}">
                            <label for="subject_name" class="control-label col-md-3">اسم المادة</label>
                            <div class="col-md-9">
                                <input type="text" name="subject_name" id="subject_name" class="form-control"/>

                                @if ($errors->has('subject_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject_name') }}</strong>
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
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('subject_type') ? ' has-error' : '' }}">
                            <label for='subject_type' class="control-label col-md-3"> نوع المادة</label>
                            <div class="col-md-9">
                                <select class="form-control" name='subject_type' id='subject_type'>
                                    <option value="">اختر</option>
                                    @if ($subject_types->count())
                                        @foreach ($subject_types as $subject_type)
                                            <option value="{{$subject_type->id}}">{{$subject_type->type}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('subject_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject_type') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('subject_order') ? ' has-error' : '' }}">
                            <label for="subject_order" class="control-label col-md-3">ترتيب المادة</label>
                            <div class="col-md-9">
                                <input type="number" name="subject_order" id="subject_order" class="form-control"/>

                                @if ($errors->has('subject_order'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject_order') }}</strong>
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
