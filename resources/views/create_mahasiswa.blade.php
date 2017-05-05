@extends('main')

@section('content')
    <div class="panel panel-default">
                    <div class="panel-heading">Tambah data mahasiswa</div>
                    <div class="panel-body">
                    
                    {!! Form::open(['route' => 'mahasiswas.store','class'=>'form-horizontal']) !!}
                        @include('form.form_add_mahasiswa')                            
                    {!! Form::close() !!}
                        
                    </div>
                </div>
@stop