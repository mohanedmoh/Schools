<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <h3>خط ترحيل جديد</h3>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>

        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ url('/newTransportation_lines') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('line_name') ? ' has-error' : '' }}">
                            <label for="line_name" class="control-label col-md-3">اسم خط الترحيل</label>
                            <div class="col-md-4">
                                <input type="text" name="line_name" id="line_name" class="form-control" required/>

                                @if ($errors->has('line_name'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('line_name') }}</strong>
                                                                                </span>
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('grade_checkboxes') ? ' has-error' : '' }}">
                            <label for="grade_checkboxes" class=" control-label col-md-3"> الصفوف المسموح بها</label>
                            <div class="col-md-3">
                                @if ($grades->count())
                                    @foreach ($grades as $grade)
                                        <div class="checkbox" style="padding-top: 15px;">
                                            <label>
                                                <input type="checkbox" name="grade_checkboxes[]" value="{{$grade->id}}"
                                                       class="form-control">{{$grade->grade}}
                                            </label>
                                        </div>
                                    @endforeach
                                @endif


                            </div>
                            @if ($errors->has('grade_checkboxes'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('grade_checkboxes') }}</strong>
                                    </span>
                            @endif

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
