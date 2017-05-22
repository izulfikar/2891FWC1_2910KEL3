@extends('master')
@section('container')
<br>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Hasil Pertanian</strong>
		<a href="{{ url('hasil_tani/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Hasil Tani</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Jenis</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuahasil_tani as $hasil_tani)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $hasil_tani->nama or 'nama kosong' }}</td>
					<td>{{ $hasil_tani->jenis or 'jenis kosong' }}</td>
					<td>{{ $hasil_tani->harga or 'harga kosong'}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{ url('hasil_tani/edit/'.$hasil_tani->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
							<a href="{{ url('hasil_tani/'.$hasil_tani->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
							<a href="{{ url('hasil_tani/hapus/'.$hasil_tani->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop