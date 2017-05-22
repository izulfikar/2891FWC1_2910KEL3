@extends('master')
@section('container')
<br>
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('pengguna')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Pengguna</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$pengguna->username}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$pengguna->password}}</td>
		</tr>
		<tr>
			<td>HP</td>
			<td>:</td>
			<td>{{$pengguna->level}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pengguna->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pengguna->updated_at}}</td>
		</tr>
	</table>
</div>
@stop