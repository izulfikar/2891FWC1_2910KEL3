@extends('master')
@section('container')
<br>
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('hasil_tani')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data hasil_tani</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$hasil_tani->nama}}</td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td>:</td>
			<td>{{$hasil_tani->jenis}}</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>{{$hasil_tani->harga}}</td>
		</tr>
		<tr>
			<td>Nama Lahan</td>
			<td>:</td>
			<td>{{$hasil_tani->lahan->nama}}</td>
		</tr>
		<tr>
			<td>Nama Distributor</td>
			<td>:</td>
			<td>{{$hasil_tani->distributor->nama}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$hasil_tani->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$hasil_tani->updated_at}}</td>
		</tr>
	</table>
</div>
@stop