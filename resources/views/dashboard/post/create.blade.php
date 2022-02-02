

@extends('template')

@section('title','REXXCODE - Dashboard Menulis Artikel')

@section('content')
<div class="card border-0 rounded shadow-md">
	<div class="card-body">
		<form method="POST" action="{{route('artikel.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control mb-3 @error('title') is-invalid @enderror"  name="title" placeholder="Masukkan judul ...">
                @error('title')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
                <!-- error message untuk content -->
			</div>
            <div class="form-group">
                <label for="">Kategori</label>
                <select name="kategori" id="" class="form-control mb-3">
                    <option value="">Pilih Kategori</option>
                    @foreach ($cat as $key)
                        <option value="{{$key->id}}">{{$key->name}}</option>
                    @endforeach
                </select>
            </div>
			<div class="form-group mb-3">
				<label>Konten</label>
				<textarea class="form-control  @error('body') is-invalid @enderror" name="body" rows="5"placeholder="Masukkan artikel ...">{{ old('body') }}</textarea>
				 <!-- error message untuk content -->
                @error('body')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
			</div>
			<button type="submit" class="btn btn-primary btn-md">Simpan</button>
			<button type="submit" class="btn btn-success btn-md">Refresh</button>
				<a href="{{route('artikel.index')}}" class="btn btn-warning btn-md">Kembali</a>
		</form>
	</div>			
</div>		
@endsection