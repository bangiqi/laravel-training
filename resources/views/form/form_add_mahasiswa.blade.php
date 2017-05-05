<div class="form-group {!! $errors->has('npm') ? 'has-error' : '' !!}">                            
                            {!! Form::label('npm', 'npm',['class'=>'control-label col-sm-2']) !!}
                                <div class="col-sm-2">
                                    {!! Form::text('npm', isset($model) ? $data_mhs : null, ['class'=>'form-control']) !!}
                                    {!! $errors->first('npm', '<p class="help-block">:message</p>') !!} 
                                </div>                                                         
                            </div>

                            <div class="form-group {!! $errors->has('nama') ? 'has-error' : '' !!}">                            
                            {!! Form::label('nama', 'nama',['class'=>'control-label col-sm-2']) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('nama', isset($model) ? $data_mhs : null, ['class'=>'form-control']) !!}
                                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!} 
                                </div>                                                         
                            </div>

                            <div class="form-group {!! $errors->has('jurusan') ? 'has-error' : '' !!}">                            
                            {!! Form::label('jurusan', 'jurusan',['class'=>'control-label col-sm-2']) !!}
                                <div class="col-sm-4">
                                    {!! Form::select('jurusan',$list_jurusan, null, ['class'=>'form-control','placeholder' => '-- pilih jurusan --']) !!}
                                    {!! $errors->first('jurusan', '<p class="help-block">:message</p>') !!} 
                                </div>                                                         
                            </div>

                            <div class="form-group {!! $errors->has('jurusan') ? 'has-error' : '' !!}">                            
                            {!! Form::label('kelas', 'kelas',['class'=>'control-label col-sm-2']) !!}
                                <div class="col-sm-4">
                                    {!! Form::select('kelas',['reguler'=>'Reguler','karyawan'=>'Karyawan'], null, ['class'=>'form-control','placeholder' => '-- pilih kelas --']) !!}
                                    {!! $errors->first('kelas', '<p class="help-block">:message</p>') !!} 
                                </div>                                                         
                            </div>

                            <div class="form-group {!! $errors->has('nama') ? 'has-error' : '' !!}">                            
                            {!! Form::label('semester', 'semester',['class'=>'control-label col-sm-2']) !!}
                                <div class="col-sm-1">
                                    {!! Form::text('semester', isset($model) ? $data_mhs : null, ['class'=>'form-control']) !!}
                                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!} 
                                </div>                                                         
                            </div>
         
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">                       
                                {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
                                </div>
                            </div>
