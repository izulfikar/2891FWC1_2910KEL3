@extends('master')
@section('container')
<br>
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('pelanggan')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data pelanggan</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$pelanggan->nama}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$pelanggan->alamat}}</td>
		</tr>
		<tr>
			<td>HP</td>
			<td>:</td>
			<td>{{$pelanggan->hp}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{$pelanggan->pengguna->username}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{$pelanggan->pengguna->password}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pelanggan->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pelanggan->updated_at}}</td>
		</tr>
	</table>
</div>
@stop