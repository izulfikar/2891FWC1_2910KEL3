<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!!Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"])!!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!!Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"])!!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Status</label>
	<div class="col-sm-10">
		{!!Form::text('status',null,['class'=>'form-control','placeholder'=>"Status"])!!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="petani_id">Petani</label>
	<div class="col-sm-10">
		{!!Form::select('petani_id', $petani->lists('nama','id'),null,['class'=>'form-control','id'=>'petani_id','placeholder'=>"Petani"]) !!}
	</div>
</div>