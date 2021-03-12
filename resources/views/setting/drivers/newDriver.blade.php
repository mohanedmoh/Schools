<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <h3>رحال جديد</h3>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>

        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ url('/newDriver') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                            <label for="job_title" class="control-label col-md-3">اسم الوظيفة</label>
                            <div class="col-md-9">
                                <input type="text" name="job_title" id="job_title" required class="form-control"/>
                                @if ($errors->has('job_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_title') }}</strong>
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
