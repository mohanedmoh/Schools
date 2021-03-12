<div class="portlet box green">
            <div class="portlet-title">
                
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    
                </div>
            </div>
            <div dir="rtl"  class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{ url('/student_health') }}" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                        
                            <hr/>
                            <div class="form-group{{ $errors->has('health_student_id') ? ' has-error' : '' }}">
                            <label for='health_student_id' class="col-md-offset-1 col-md-3 control-label">المتسلسل </label>
                            <div class="col-md-4">
                                <input type="number"  name='health_student_id' id="health_student_id" value="{{old('health_student_id')}}" readonly class="form-control input-circle" >
                                @if ($errors->has('health_student_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('health_student_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                            
                        <div class="form-group{{ $errors->has('health_student_name') ? ' has-error' : '' }}">
                            <label for='health_student_name' class="col-md-offset-1 col-md-3 control-label">اسم الطالب </label>
                            <div class="col-md-4">
                                <input type="text"  name='health_student_name' id="health_student_name" value="{{old('health_student_name')}}" readonly class="form-control input-circle" >
                                @if ($errors->has('health_student_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('health_student_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                            <div class="form-group{{ $errors->has('health_status') ? ' has-error' : '' }}">
                            <label for="health_status" class="col-md-offset-1 col-md-3 control-label">الحالة الصحية  </label>
                            <div class="col-md-4">
                                <input type="text" name="health_status"  id="health_status" value="{{old('health_status')}}"  class="form-control input-circle" >
                                @if ($errors->has('health_status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('health_status') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="form-group{{ $errors->has('blood_family') ? ' has-error' : '' }}">
                            <label for='blood_family' class="col-md-offset-1 control-label col-md-3">  فصيلة الدم   </label>
                            <div class="col-md-4">
                                <select class="form-control input-circle" name='blood_family' id='blood_family' value="{{old('blood_family')}}" >
                                    <option value="">ختار</option>
                                    @if ($bloods->count())
                                        @foreach ($bloods as $blood)
                                            <option value="{{$blood->id}}">{{$blood->title}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('blood_family'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('blood_family') }}</strong>
                                </span>
                                @endif
                            </div>
                                    
                        </div>

                        
                        
                            <div class="form-group{{ $errors->has('diseases') ? ' has-error' : '' }}">
                            <label for="diseases" class="col-md-offset-1 col-md-3 control-label">امراض ثابتة  </label>
                            <div class="col-md-4">
                                <input type="text" name="diseases"  id="diseases" value="{{old('diseases')}}"  class="form-control input-circle" >
                                @if ($errors->has('diseases'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('diseases') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                    
                        
                    
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-circle green">حفظ</button>
                                <button type="reset" class="btn btn-circle grey-salsa btn-outline">مسح</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <!-- END FORM-->
</div> <!-- END portlet -->
        

        