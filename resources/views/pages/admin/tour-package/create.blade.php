{{-- Dashboard --}}
@extends('layouts.admin')

@section('content')    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb" style="background-color: #ecf0f5; padding-left: 
            0px;">
              <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Paket Tour</li>
            </ol>
            <h1 class="h3 mb-0 text-gray-800">Tambah Tiket Tour</h1>
        </div>
    </section>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card-shadow">
                    <div class="card-body">
                        <form action="{{ route('tour-package.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="location">Lokasi</label>
                                <input type="text" class="form-control" name="location" placeholder="Lokasi" value="{{ old('location') }}">
                            </div>
                            <div class="form-group">
                                <label for="short_content">Short Content</label>
                                <input type="text" class="form-control" name="short_content" placeholder="Short Content" value="{{ old('short_content') }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" rows="10" class="d-block w-100 form-control">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="event">Event</label>
                                <input type="text" class="form-control" name="event" placeholder="Event" value="{{ old('event') }}">
                            </div>
                            <div class="form-group">
                                <label for="language">Bahasa</label>
                                <input type="text" class="form-control" name="language" placeholder="Bahasa" value="{{ old('language') }}">
                            </div>
                            <div class="form-group">
                                <label for="food">Makanan</label>
                                <input type="text" class="form-control" name="food" placeholder="Makanan" value="{{ old('food') }}">
                            </div>
                            <div class="form-group">
                                <label for="map">Map</label>
                                <textarea name="map" rows="10" class="d-block w-100 form-control">{{ old('map') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="departure">Keberangkatan</label>
                                <input type="date" class="form-control" name="departure" placeholder="Keberangkatan" value="{{ old('departure') }}">
                            </div>
                            <div class="form-group">
                                <label for="duration">Durasi</label>
                                <input type="text" class="form-control" name="duration" placeholder="Durasi" value="{{ old('duration') }}">
                            </div>
                            <div class="form-group">
                                <label for="type">Tipe</label>
                                <input type="text" class="form-control" name="type" placeholder="Tipe" value="{{ old('type') }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input type="number" class="form-control" name="price" placeholder="Harga" value="{{ old('price') }}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- /.content -->
</div>
@endsection
{{-- Dashboard --}}