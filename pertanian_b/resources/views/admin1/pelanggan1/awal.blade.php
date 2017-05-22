@extends('master')
@section('container')
<br>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data pelanggan</strong>
		<a href="{{ url('pelanggan/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>pelanggan</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
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
			@foreach ($semuapelanggan as $pelanggan)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $pelanggan->nama or 'nama kosong' }}</td>
					<td>{{ $pelanggan->alamat or 'alamat kosong' }}</td>
					<td>{{ $pelanggan->hp or 'hp kosong' }}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{ url('pelanggan/edit/'.$pelanggan->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
							<a href="{{ url('pelanggan/'.$pelanggan->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
							<a href="{{ url('pelanggan/hapus/'.$pelanggan->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop