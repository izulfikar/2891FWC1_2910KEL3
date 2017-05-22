@extends('master')
@section('container')
<br>
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong><a href="{{url('pelanggan')}}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a>Tambah Data pelanggan</strong>
	</div>
	{!!Form::open(['url'=>'pelanggan/simpan','class'=>'form-horizontal'])!!}
	@include('pelanggan.form')
	<div style="width: 100%:text-align:right;">
		<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
		<button class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!!Form::close()!!}
</div>
@stop