@extends('master')
@section('container')
<br>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data admin</strong>
		<a href="{{ url('admin/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>admin</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaadmin as $admin)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $admin->nama or 'nama kosong' }}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{ url('admin/edit/'.$admin->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
							<a href="{{ url('admin/'.$admin->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
							<a href="{{ url('admin/hapus/'.$admin->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop