@extends('master')
@section('container')
<br>
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
		<strong><a href="{{url('petani')}}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a>Tambah Data Petani</strong>
	</div>
	{!!Form::open(['url'=>'petani/simpan','class'=>'form-horizontal'])!!}
	@include('petani.form')
	<div style="width: 100%:text-align:right;">
		<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
		<button class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!!Form::close()!!}
</div>
</div>	
@stop