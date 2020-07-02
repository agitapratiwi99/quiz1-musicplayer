@extends('layout/main')
@section('tittle', 'Track')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-7">
            
            <a href="/track/create_track" class="btn btn-primary my-3">Tambah Musik</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif  
            <h1 class="mt-2 text-light">Daftar Musik</h1>
            <ul class="list-group">
            @foreach($track as $track)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $track->track_name}}
        <a href="/track/{{ $track->track_id }}" class="badge badge-info">Putar Musik</a>
    </li>
    </ul>
    @endforeach
            </div>
        </div>
    </div>
    @endsection 
