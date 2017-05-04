@extends('main')

@section('content')
    <div class="panel panel-default">
                    <div class="panel-heading">Tambah data mahasiswa</div>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="npm">NPM</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="txt_npm" placeholder="input NPM">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nama">Nama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="txt_nama_mhs" placeholder="input nama mahasiswa">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="genre">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                <select class="form-control">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>                                    
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="genre">Jurusan</label>
                                <div class="col-sm-10">
                                <select class="form-control">
                                    <option>Teknik Informatika</option>
                                    <option>Teknik Elektro</option>
                                    <option>Teknik Mesin</option>
                                    <option>Teknik Sipil</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="genre">Semester</label>
                                <div class="col-sm-10">
                                <select class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="genre">Kelas</label>
                                <div class="col-sm-10">
                                <select class="form-control">
                                    <option value="1">Karyawan</option>
                                    <option value="2">Regular</option>                                    
                                </select>
                                </div>
                            </div>
                            
                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
@stop