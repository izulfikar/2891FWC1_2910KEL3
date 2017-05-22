<div class="form-group">
	<label class="col-sm-2 control-label" id="pelanggan_id">Pelanggan</label>
	<div class="col-sm-10">
		{!!Form::select('pelanggan_id', $pelanggan->lists('nama','id'),null,['class'=>'form-control','id'=>'pelanggan_id','placeholder'=>"Pelanggan"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="hasil_tani_id">Hasil Tani</label>
	<div class="col-sm-10">
		{!!Form::select('hasil_tani_id', $hasil_tani->lists('nama','id'),null,['class'=>'form-control','id'=>'hasil_tani_id','placeholder'=>"Nama Barang"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jumlah</label>
	<div class="col-sm-10">
		{!!Form::text('jumlah',null,['class'=>'form-control','placeholder'=>"Jumlah"])!!}
	</div>
</div>