                        <div class="portlet box green">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                         
                                                        </div>
                                                        <div class="tools">
                                                           
                                                            
                                                        </div>
                                                    </div>
                                                    <div dir="rtl" class="portlet-body form">
                                                        <!-- BEGIN FORM-->
                                                        <form action="{{ url('/registration') }}" method="POST" class="form-horizontal">
                                                        
                                                            <div  class="form-body">
                                                                {{ csrf_field() }}
                                                               
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                         <div class="form-group{{ $errors->has('registration_student_id') ? ' has-error' : '' }}">
                                                                            <label for="registration_student_id" class="control-label col-md-3"> رقم الطالب</label>
                                                                            <div class="col-md-9">
                                                                                <input type="number" readonly name="registration_student_id" id="registration_student_id" value="{{ old('registration_student_id') }}" class="form-control" />
                                                                                @if ($errors->has('registration_student_id'))
                                                                                <span class="help-block">
                                                                                 <strong>   {{ $errors->first('registration_student_id') }}</strong>
                                                                                </span>
                                                                                @endif    
                                                                            </div>
                                                                                
                                                                        </div>
                                                                        
                                                                    </div>
                                                                     <div class="col-md-6">
                                                                         <div class="form-group{{ $errors->has('registration_student_name') ? ' has-error' : '' }}">
                                                                            <label for="registration_student_name" class="control-label col-md-3"> اسم الطالب</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" readonly name="registration_student_name" id="registration_student_name" value="{{ old('registration_student_name') }}" class="form-control" />

                                                                                 @if ($errors->has('registration_student_name'))
                                                                                <span class="help-block">
                                                                                    <strong>{{ $errors->first('registration_student_name') }}</strong>
                                                                                </span>
                                                                                @endif

                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                  
                                                                </div>
                                                                <!--/row-->
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group{{ $errors->has('registration_grade') ? ' has-error' : '' }}">
                                                                            <label for='registration_grade' class="control-label col-md-3"> الصف</label>
                                                                            <div class="col-md-9">
                                                                                <select class="form-control" name='registration_grade' id='registration_grade' value="{{old('registration_grade')}}" onChange="getClassRoom(this.value)" />
                                                                                    <option value="">إختار</option>
                                                                                    @if ($grades->count())
                                                                                        @foreach ($grades as $grade)
                                                                                            <option value="{{$grade->id}}">{{$grade->grade}}</option>
                                                                                        @endforeach
                                                                                    @endif
                                                                                </select>
                                                                                @if ($errors->has('registration_grade'))
                                                                                <span class="help-block">
                                                                                    <strong>{{ $errors->first('registration_grade') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                   <div class="col-md-6">
                                                                      <div class="form-group{{ $errors->has('registration_classroom') ? ' has-error' : '' }}">
                                                                            <label for='registration_classroom' class="control-label col-md-3"> الفصل</label>
                                                                            <div class="col-md-9">
                                                                                <select class="form-control" name='registration_classroom' id='registration_classroom' value="{{old('registration_classroom')}}">
                                                                                    <option value="">إختار</option>
                                                                                </select>
                                                                                @if ($errors->has('registration_classroom'))
                                                                                <span class="help-block">
                                                                                    <strong>{{ $errors->first('registration_classroom') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                            
                                                            <div class='row'>
                                                             <div class="col-md-6">
                                                                      <div class="form-group{{ $errors->has('registration_date') ? ' has-error' : '' }}">
                                                                            <label for='registration_date' class="control-label col-md-3"> تاريخ التسجيل</label>
                                                                            <div class="col-md-9">
                                                                                <input type="date" name='registration_date' id='registration_date' value="{{old('registration_date')}}" class="form-control" />
                                                                                @if ($errors->has('registration_date'))
                                                                                <span class="help-block">
                                                                                    <strong>{{ $errors->first('registration_date') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </div>
                                                                           
                                                                        </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                      <div class="form-group{{ $errors->has('registration_fee') ? ' has-error' : '' }}">
                                                                            <label for='registration_fee' class="control-label col-md-3"> دفع الرسوم</label>
                                                                            <div class="col-md-9">
                                                                                <select class="form-control" name='registration_fee' id='registration_fee' value="{{old('registration_fee')}}">
                                                                                    <option value="">Select</option>
                                                                                    <option value="1"> Full Fees</option>
                                                                                    <option value="2"> Discount</option>
                                                                                    <option value="3"> Free</option>
                                                                                </select>
                                                                                @if ($errors->has('registration_fee'))
                                                                                <span class="help-block">
                                                                                    <strong>{{ $errors->first('registration_fee') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                                <div class="row">
                                                               <div class="col-md-6">
                                                                        <div class="form-group{{ $errors->has('registration_is_new') ? ' has-error' : '' }}">
                                                                            <label for='registration_is_new' class="control-label col-md-3"></label>
                                                                            <div class="col-md-9">
                                                                                <div class="checkbox-list">
                                                                                    <label class="checkbox-inline">
                                                                                        <input type="checkbox" name="registration_is_new" id='registration_is_new' value="1" /> تسجيل جديد </label>
                                                                                   @if ($errors->has('registration_is_new'))
                                                                                <span class="help-block">
                                                                                    <strong>{{ $errors->first('registration_is_new') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-md-6">
                                                                         <div class="form-group{{ $errors->has('registration_discount_amount') ? ' has-error' : '' }}">
                                                                            <label for="registration_discount_amount" class="control-label col-md-3">    مبلغ التخفيض</label>
                                                                            <div class="col-md-9">
                                                                                <input type="number" name="registration_discount_amount" id="registration_discount_amount" value="{{old('registration_discount_amount')}}" class="form-control" >
                                                                                 @if ($errors->has('registration_discount_amount'))
                                                                                <span class="help-block">
                                                                                    <strong>{{ $errors->first('registration_discount_amount') }}</strong>
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
