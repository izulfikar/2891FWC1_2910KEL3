@extends('master')
@section('container')
<br>
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('pelangganmembeli')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data membeli</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Pelanggan</td>
			<td>:</td>
			<td>{{$membeli->pelanggan->nama}}</td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td>{{$membeli->hasil_tani->nama}}</td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td>:</td>
			<td>{{$membeli->hasil_tani->jenis}}</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>{{$membeli->hasil_tani->harga}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$membeli->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$membeli->updated_at}}</td>
		</tr>
	</table>
</div>
@stop