@extends('master')
@section('container')
<br>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data distributor</strong>
		<a href="{{ url('distributor/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>distributor</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>HP</th>
				<th>No. Rekening</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach($data as $distributor)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $distributor->nama or 'nama kosong' }}</td>
					<td>{{ $distributor->alamat or 'alamat kosong' }}</td>
					<td>{{ $distributor->hp or 'hp kosong' }}</td>
					<td>{{ $distributor->no_rek or 'no_rek kosong' }}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{ url('distributor/edit/'.$distributor->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
							<a href="{{ url('distributor/'.$distributor->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
							<a href="{{ url('distributor/hapus/'.$distributor->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop