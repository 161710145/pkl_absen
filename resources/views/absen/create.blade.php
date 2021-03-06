@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-heading">Tambah Data 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('absen.store') }}" method="post" >
			  		{{ csrf_field() }}

			  <div class="form-group {{ $errors->has('siswa_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Siswa</label>	
			  			<select name="siswa_id" class="form-control js-example-basic-multiple" multiple="multiple">
			  				@foreach($siswa as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('siswa_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('siswa_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kelas_id') ? ' has-error' : '' }}">
			  			<label class="control-label">kelas</label>	
			  			<select name="kelas_id[]" class="form-control js-example-basic-multiple" multiple="multiple">
			  				@foreach($kelas as $data)
			  				<option value="{{ $data->id }}">{{ $data->kelas }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kelas_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kelas_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  
			  		<div class="form-group {{ $errors->has('nis') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Induk Siswa</label>	
			  			<input type="text" name="nis" class="form-control"  required>
			  			@if ($errors->has('nis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nis') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Absen</label>	
			  			<input type="date" name="tanggal" class="form-control"  required>
			  			@if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<br>
			  			<input type="radio" name="keterangan" value="hadir">Hadir&nbsp;&nbsp;
			  			<input type="radio" name="keterangan" value="izin">Izin&nbsp;&nbsp; 
			  			<input type="radio" name="keterangan" value="sakit">Sakit&nbsp;&nbsp;
			  			<input type="radio" name="keterangan" value="aifa">Alfa&nbsp;&nbsp; 
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  		
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection