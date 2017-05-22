@extends('master')
@section('container')
<br>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Transaksi</strong>
		<a href="{{ url('pelangganmembeli/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Transaksi</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Pelanggan</th>
				<th>Nama Barang</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuamembeli as $membeli)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $membeli->pelanggan->nama or 'nama kosong' }}</td>
					<td>{{ $membeli->hasil_tani->nama or 'nama barang kosong' }}</td>
					<td>{{ $membeli->hasil_tani->harga or 'harga barang kosong' }}</td>
					<td>{{ $membeli->jumlah or 'jumlah kosong' }}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{ url('pelangganmembeli/'.$membeli->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop