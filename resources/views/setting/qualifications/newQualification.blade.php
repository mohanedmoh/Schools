<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <h3>مؤهل جديد</h3>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>

        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ url('/newQualification') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('qualification') ? ' has-error' : '' }}">
                            <label for="qualification" class="control-label col-md-3">اسم المؤهل</label>
                            <div class="col-md-4">
                                <input type="text" name="qualification" id="qualification" class="form-control"/>

                                @if ($errors->has('qualification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('qualification') }}</strong>
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
