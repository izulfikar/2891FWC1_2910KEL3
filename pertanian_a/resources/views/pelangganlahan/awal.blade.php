@extends('master')
@section('container')
<br>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Lahan Petani</strong>
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
							
							<a href="{{ url('lahan/'.$lahan->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
							
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop