@extends('main')

@section('content')

<!--table data mahasiswa-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title pull-left">
                        Data Mahasiswa Teknik UIKA

                    </h3>
                    
                    <a href="{{ url("/data_mahasiswa/add")}}">
                        <button class="btn btn-primary pull-right btn-sm">
                            <span class="glyphicon glyphicon-plus"></span> Add Mahasiswa
                        </button>
                    </a>
                    
                    <div class="clearfix"></div>
                </div>
                      
                    <table class="table table-striped table-condensed">
                        <thead>
                            <th>#</th>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>Genre</th>
                            <th>Jurusan</th>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>131105150354</td>
                                <td>Rizki Ramdani</td>
                                <td>Laki-laki</td>
                                <td>Sistem Informasi</td>
                                <td>7</td>
                                <td>Karyawan A</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-success">Action</button>
                                        <button type="button" class="btn btn-xs btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                    <ul class="dropdown-menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>1</td>
                                <td>131105150354</td>
                                <td>Rizki Ramdani</td>
                                <td>Laki-laki</td>
                                <td>Sistem Informasi</td>
                                <td>7</td>
                                <td>Karyawan A</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-success">Action</button>
                                        <button type="button" class="btn btn-xs btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                    <ul class="dropdown-menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>131105150354</td>
                                <td>Rizki Ramdani</td>
                                <td>Laki-laki</td>
                                <td>Sistem Informasi</td>
                                <td>7</td>
                                <td>Karyawan A</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-success">Action</button>
                                        <button type="button" class="btn btn-xs btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                    <ul class="dropdown-menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>131105150354</td>
                                <td>Rizki Ramdani</td>
                                <td>Laki-laki</td>
                                <td>Sistem Informasi</td>
                                <td>7</td>
                                <td>Karyawan A</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-success">Action</button>
                                        <button type="button" class="btn btn-xs btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                    <ul class="dropdown-menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        <ul class="pagination pull-right">
                            <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>

                
            </div>
            <!--tutup table data mahasiswa-->
@stop