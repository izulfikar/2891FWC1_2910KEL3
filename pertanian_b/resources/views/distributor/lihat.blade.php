@extends('master')
@section('container')
<br>
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('distributor')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data distributor</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$distributor->nama}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$distributor->alamat}}</td>
		</tr>
		<tr>
			<td>HP</td>
			<td>:</td>
			<td>{{$distributor->hp}}</td>
		</tr>
		<tr>
			<td>No. Rekening</td>
			<td>:</td>
			<td>{{$distributor->no_rek}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$distributor->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$distributor->updated_at}}</td>
		</tr>
	</table>
</div>
@stop