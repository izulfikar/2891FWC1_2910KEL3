@extends('master')
@section('container')
<br>
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('lahan')}}">
			<i class="fa text-default fa-chevron-left"></i>
		</a>Perbarui Data Lahan Petani</strong>
	</div>
	{!! Form::model($lahan,['url'=>'lahan/edit/'.$lahan->id,'class'=>'form-horizontal'])!!}
		@include('lahan.form')
		<div style="width:100%;text-align:right;">
			<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
		</div>
		{!!Form::close()!!}
</div>
@stop