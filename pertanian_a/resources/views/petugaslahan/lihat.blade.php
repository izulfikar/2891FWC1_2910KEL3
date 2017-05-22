@extends('master')
@section('container')
<br>
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('lahan')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Lahan</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$lahan->nama}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$lahan->alamat}}</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>{{$lahan->status}}</td>
		</tr>
		<tr>
			<td>Nama Petani</td>
			<td>:</td>
			<td>{{$lahan->petani->nama}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$lahan->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$lahan->updated_at}}</td>
		</tr>
	</table>
</div>
@stop