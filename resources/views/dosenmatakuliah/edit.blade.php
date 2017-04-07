@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('/dosen_matakuliah')}}">
			<i class="fa text-default fa-chevron-left"></i>
		</a>Perbarui Data Dosen Matakuliah</strong>
	</div>
	{!! Form::model($dosen_matakuliah,['url'=>'dosenmatakuliah/edit/'.$dosen_matakuliah->id,'class'=>'form-horizontal'])!!}
		@include('dosenmatakuliah.form')
		<div style="width:100%;text-align:right;">
			<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
		</div>
		{!!Form::close()!!}
</div>
@stop