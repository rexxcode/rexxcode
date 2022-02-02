@extends('template')

@section('title','REXX CODE - Edit Artikel')

@section('content')
	<div class="card border-0 rounded shadow-md">
		<div class="card-body">
		
				<form method="POST" action="" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					
					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control mb-3" value="{{ old('title', $post->title) }}" name="title" placeholder="Masukkan judul ...">
					</div>
					<div class="form-group mb-3">
						<label>Body</label>
						<textarea class="form-control  @error('body') is-invalid @enderror" id="editor" name="body" rows="5">{{ old('body', $post->body) }}</textarea>
						 <!-- error message untuk content -->
                        @error('body')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
					</div>
					<button type="submit" class="btn btn-primary btn-md">Update</button>
					<button type="submit" class="btn btn-success btn-md">Refresh</button>
						<a href="{{route('artikel.index')}}" class="btn btn-warning btn-md">Kembali</a>
				</form>
		</div>
	</div>	
@endsection