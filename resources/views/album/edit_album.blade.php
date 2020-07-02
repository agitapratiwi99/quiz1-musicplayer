@extends('layout/main')
@section('tittle', 'Form Ubah Album')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="mt-2 text-light">Form Ubah Album</h1>
            <form method="post" action="/album/{{ $album->album_id }}">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label class="mt-2 text-light" for="nama">Album</label>
                    <input type="text" class="form-control @error('album_nama') is-invalid @enderror" id="album_nama" placeholder="Masukkan Nama" name="album_nama" value="{{ $album->album_nama }}">
                    @error('album_nama')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                    <label class="mt-2 text-light" for="nama">Artist</label>
                    <select class="form-control @error('album_id_artist') is-invalid @enderror"  name="album_id_artist" id="album_id_artist">
                        @foreach($artists as $artist)
                        <option  value="{{ $artist->nama_id }}">{{ $artist->nama }}</option>
                        @endforeach
                    </select>
                    </div>
                <button type="submit" class="btn btn-primary"> Ubah Data</button>
            </form>
            </div>
        </div>
    </div>

    @endsection 
