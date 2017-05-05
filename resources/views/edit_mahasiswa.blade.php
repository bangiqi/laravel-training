@extends('main')

@section('content')
    <div class="panel panel-default">
                    <div class="panel-heading">Tambah data mahasiswa</div>
                    <div class="panel-body">
                    
                    {!! Form::model($data_mhs, ['route' => ['mahasiswas.update', $data_mhs],'method' =>'patch'])!!}
                        @include('form.form_add_mahasiswa', ['model' => $data_mhs])
                    {!! Form::close() !!}
                    </div>
                </div>
@stop