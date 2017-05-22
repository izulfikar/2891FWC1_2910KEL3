@extends('master')
@section('container')
<br>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Petani
                    <a href="{{ url('petani/tambah') }}" class="btn btn-xs btn-primary pull-right">
                        <i class="fa fa-plus"></i>petani</a>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>HP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x=1; ?>
                                @foreach($data as $petani)
                                <tr>
                                    <td>{{ $x++ }}</td>
                                    <td>{{ $petani->nama or 'nama kosong' }}</td>
                                    <td>{{ $petani->alamat or 'alamat kosong' }}</td>
                                    <td>{{ $petani->hp or 'hp kosong' }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ url('petani/edit/'.$petani->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
                                            <a href="{{ url('petani/'.$petani->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
                                            <a href="{{ url('petani/hapus/'.$petani->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
@stop            