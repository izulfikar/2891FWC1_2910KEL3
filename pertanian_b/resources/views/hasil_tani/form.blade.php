<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!!Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"])!!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jenis</label>
	<div class="col-sm-10">
		{!!Form::text('jenis',null,['class'=>'form-control','placeholder'=>"Jenis"])!!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Harga</label>
	<div class="col-sm-10">
		{!!Form::text('harga',null,['class'=>'form-control','placeholder'=>"Harga"])!!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="lahan_id">Lahan</label>
<div class="col-sm-10">
		{!!Form::select('lahan_id', $lahan->lists('nama','id'),null,['class'=>'form-control','id'=>'lahan_id','placeholder'=>"Lahan"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="distributor_id">Distributor</label>
	<div class="col-sm-10">
		{!!Form::select('distributor_id', $distributor->lists('nama','id'),null,['class'=>'form-control','id'=>'distributor_id','placeholder'=>"Distributor"]) !!}
	</div>
</div>