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
            <h1 class="h3 mb-0 text-gray-800">Edit Tiket Tour {{ $item->title }}</h1>
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
                        <form action="{{ route('tour-package.update', $item->id) }}" method="POST">
                            @method ('put')
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
                            </div>
                            <div class="form-group">
                                <label for="location">Lokasi</label>
                                <input type="text" class="form-control" name="location" placeholder="Lokasi" value="{{ $item->location }}">
                            </div>
                            <div class="form-group">
                                <label for="short_content">Short Content</label>
                                <input type="text" class="form-control" name="short_content" placeholder="Short Content" value="{{ $item->short_content }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" rows="10" class="d-block w-100 form-control">{{ $item->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="event">Event</label>
                                <input type="text" class="form-control" name="event" placeholder="Event" value="{{ $item->event }}">
                            </div>
                            <div class="form-group">
                                <label for="language">Bahasa</label>
                                <input type="text" class="form-control" name="language" placeholder="Bahasa" value="{{ $item->language }}">
                            </div>
                            <div class="form-group">
                                <label for="food">Makanan</label>
                                <input type="text" class="form-control" name="food" placeholder="Makanan" value="{{ $item->food }}">
                            </div>
                            <div class="form-group">
                                <label for="map">Map</label>
                                <textarea name="map" rows="10" class="d-block w-100 form-control">{{ $item->map }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="departure">Keberangkatan</label>
                                <input type="date" class="form-control" name="departure" placeholder="Keberangkatan" value="{{$item->departure }}">
                            </div>
                            <div class="form-group">
                                <label for="duration">Durasi</label>
                                <input type="text" class="form-control" name="duration" placeholder="Durasi" value="{{ $item->duration }}">
                            </div>
                            <div class="form-group">
                                <label for="type">Tipe</label>
                                <input type="text" class="form-control" name="type" placeholder="Tipe" value="{{ $item->type }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input type="number" class="form-control" name="price" placeholder="Harga" value="{{ $item->price }}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Ubah
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