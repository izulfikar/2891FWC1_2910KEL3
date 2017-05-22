@extends('master')
@section('container')
<br>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Lahan Petani</strong>
		<a href="{{ url('lahan/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Lahan Petani</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semualahan as $lahan)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $lahan->nama or 'nama kosong' }}</td>
					<td>{{ $lahan->alamat or 'alamat kosong' }}</td>
					<td>{{ $lahan->status or 'status kosong'}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{ url('lahan/edit/'.$lahan->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
							<a href="{{ url('lahan/'.$lahan->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
							<a href="{{ url('lahan/hapus/'.$lahan->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop