          <div class="portlet box green">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                           </div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse"> </a>
                                                           
                                                        </div>
                                                    </div>
                                                    <div dir="rtl"  class="portlet-body form">
                                                        <!-- BEGIN FORM-->
                                                        <form action="{{ url('/student_behavior') }}" class="form-horizontal" method="post">
                                                            {{ csrf_field() }}
                                                                <hr/>

																 <div class="form-group{{ $errors->has('behavior_student_no') ? ' has-error' : '' }}">
                                                                    <label for="behavior_student_no" class="col-md-offset-1 col-md-3 control-label">المتسلسل  </label>
                                                                    <div class="col-md-4">
                                                                        <input type="number" name="behavior_student_no" readonly  id="behavior_student_no" value="{{ old('behavior_student_no') }}" class="form-control input-circle" >
                                                                        @if ($errors->has('behavior_student_no'))
																		<span class="help-block">
																			<strong>{{ $errors->first('behavior_student_no') }}</strong>
																		</span>
																		@endif
                                                                    </div>
                                                                </div>

                                                                	 <div class="form-group{{ $errors->has('behavior_student_name') ? ' has-error' : '' }}">
                                                                    <label for="behavior_student_name" class="col-md-offset-1 col-md-3 control-label">الاسم  </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" name="behavior_student_name"  readonly id="behavior_student_name" value="{{ old('behavior_student_name') }}" class="form-control input-circle" >
                                                                        @if ($errors->has('behavior_student_name'))
																		<span class="help-block">
																			<strong>{{ $errors->first('behavior_student_name') }}</strong>
																		</span>
																		@endif
                                                                    </div>
                                                                </div>

																<div class="form-group{{ $errors->has('behavior_student') ? ' has-error' : '' }}">
																	<label for='behavior_student' class="col-md-offset-1 control-label col-md-3"> السلوك   </label>
																	<div class="col-md-4">
																		<select class="form-control input-circle" name='behavior_student' id='behavior_student'>
																			<option value="">الرجاء الاختيار</option>
																			<option value="1">نعم</option>
																			<option value="0">لا</option>
																		</select>
																		@if ($errors->has('behavior_student'))
																		<span class="help-block">
																			<strong>{{ $errors->first('behavior_student') }}</strong>
																		</span>
																		@endif
																	</div>
                                                                           
                                                                </div>
																
																<div class="form-group{{ $errors->has('behavior_student_type') ? ' has-error' : '' }}">
																	<label for='behavior_student_type' class="col-md-offset-1 control-label col-md-3">  نوع التصرف  </label>
																	<div class="col-md-4">
																		<select class="form-control input-circle" name='behavior_student_type' id='behavior_student_type'>
																			<option value="1">الرجاء الاختيار</option>
																			<option value="1">نعم</option>
																			<option value="0">لا</option>
																		</select>
																		@if ($errors->has('behavior_student_type'))
																		<span class="help-block">
																			<strong>{{ $errors->first('behavior_student_type') }}</strong>
																		</span>
																		@endif
																	</div>
                                                                           
                                                                </div>

                                                                 <div class="form-body">
                                                                <div class="form-group{{ $errors->has('behavior_student_date') ? ' has-error' : '' }}">
                                                                    <label for='behavior_student_date' class="col-md-offset-1 col-md-3 control-label">  التاريخ </label>
                                                                    <div class="col-md-4">
                                                                        <input type="date"  name='behavior_student_date' id="behavior_student_date" class="form-control input-circle" >
                                                                        @if ($errors->has('behavior_student_date'))
																		<span class="help-block">
																			<strong>{{ $errors->first('behavior_student_date') }}</strong>
																		</span>
																		@endif
                                                                    </div>
                                                                </div>
																
																
																 <div class="form-group{{ $errors->has('behavior_student_notes') ? ' has-error' : '' }}">
                                                                    <label for="behavior_student_notes" class="col-md-offset-1 col-md-3 control-label">ملاحظات  </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" name="behavior_student_notes"  id="behavior_student_notes" class="form-control input-circle" >
                                                                        @if ($errors->has('behavior_student_notes'))
																		<span class="help-block">
																			<strong>{{ $errors->first('behavior_student_notes') }}</strong>
																		</span>
																		@endif
                                                                    </div>
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
                                                    </div>
                                                