<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <h3>نوع رسوم جديد</h3>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>

        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ url('/newFeesType') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <hr/>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('feesType') ? ' has-error' : '' }}">
                            <label for="feesType" class="control-label col-md-3">اسم النوع</label>
                            <div class="col-md-9">
                                <input type="text" name="feesType" id="feesType" class="form-control"/>

                                @if ($errors->has('feesType'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('feesType') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('feesCat') ? ' has-error' : '' }}">
                            <label for='feesCat' class="control-label col-md-3"> نوع الرسوم</label>
                            <div class="col-md-9">
                                <select class="form-control" name='feesCat' id='feesCat'
                                        onChange="getClassRoom(this.value)">
                                    <option value="">اختر</option>
                                    @if ($fees_cats->count())
                                        @foreach ($fees_cats as $fees_cat)
                                            <option value="{{$fees_cat->id}}">{{$fees_cat->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('feesCat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('feesCat') }}</strong>
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
