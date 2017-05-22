@extends('master')
@section('container')
<br>
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('admin')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data admin</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$admin->nama}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{$admin->pengguna->username}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{$admin->pengguna->password}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$admin->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$admin->updated_at}}</td>
		</tr>
	</table>
</div>
@stop