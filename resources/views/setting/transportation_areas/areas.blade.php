<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <h3>منطقة ترحيل جديدة</h3>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>

        </div>
    </div>
    <div dir="rtl" class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ url('/newTransportation_area') }}" method="POST" class="form-horizontal">

            <div class="form-body">
                {{ csrf_field() }}
                <hr/>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('area_name') ? ' has-error' : '' }}">
                            <label for="area_name" class="control-label col-md-3">اسم المنطقة </label>
                            <div class="col-md-9">
                                <input type="text" name="area_name" id="area_name" class="form-control" required/>

                                @if ($errors->has('area_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('area_name') }}</strong>
                                    </span>
                                @endif

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('line') ? ' has-error' : '' }}">
                            <label for='line' class="control-label col-md-3"> اسم الخط </label>
                            <div class="col-md-9">
                                <select class="form-control" name='line' id='line'>
                                    <option value="">اختر</option>
                                    @if ($lines->count())
                                        @foreach ($lines as $line)
                                            <option value="{{$line->id}}">{{$line->line_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('line'))
                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('line') }}</strong>
                                                                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="control-label col-md-3">تسعيرة المنطقة </label>
                            <div class="col-md-6">
                                <input type="number" name="price" id="price" class="form-control" required/>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
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
