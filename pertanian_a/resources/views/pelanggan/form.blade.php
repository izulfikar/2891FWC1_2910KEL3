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
	<label class="col-sm-2 control-label">HP</label>
	<div class="col-sm-10">
		{!!Form::text('hp',null,['class'=>'form-control','placeholder'=>"HP"])!!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="pengguna_id">Pengguna</label>
	<div class="col-sm-10">
		{!!Form::select('pengguna_id', $pengguna->lists('username','id'),null,['class'=>'form-control','id'=>'pengguna_id','placeholder'=>"Pengguna"]) !!}
	</div>
</div>
