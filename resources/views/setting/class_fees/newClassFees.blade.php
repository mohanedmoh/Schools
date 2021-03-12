<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <h3> رسوم جديد للفصل</h3>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ url('/newClassFee') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <hr/>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('fee_type') ? ' has-error' : '' }}">
                            <label for='fee_type' class="control-label col-md-3"> اسم الرسوم</label>
                            <div class="col-md-9">
                                <select class="form-control" name='fee_type' id='fee_type'>
                                    <option value="">اختر</option>
                                    @if ($feeTypes->count())
                                        @foreach ($feeTypes as $feeType)
                                            <option value="{{$feeType->id}}">{{$feeType->type}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('fee_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fee_type') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
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
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
                            <label for="value" class="control-label col-md-3">قيمة الرسوم</label>
                            <div class="col-md-9">
                                <input type="number" name="value" id="value" class="form-control"/>
                                @if ($errors->has('value'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('value') }}</strong>
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
