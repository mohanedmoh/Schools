<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <h3>فصل جديد</h3>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>

        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ url('/newClassroom') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('classroom_name') ? ' has-error' : '' }}">
                            <label for="classroom_name" class="control-label col-md-3">اسم الفصل</label>
                            <div class="col-md-9">
                                <input type="text" name="classroom_name" id="classroom_name" class="form-control"/>

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
