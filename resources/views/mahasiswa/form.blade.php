<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"nama"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Nim</label>
	<div class="col-sm-10">
		{!! Form::text('nim',null,['class'=>'form-control','placeholder'=>"nim"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"alamat"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Id Pengguna</label>
	<div class="col-sm-10">
		{!! Form::text('pengguna_id',null,['class'=>'form-control','placeholder'=>"pengguna_id"]) !!}
	</div>
</div>