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
              <li class="active">Image Tour</li>
            </ol>
            <h1 class="h3 mb-0 text-gray-800">Tambah Image Tour</h1>
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
                        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="tour_packages_id">Tiket Tour</label>
                                <select name="tour_packages_id" required class="form-control">
                                    <option value="">-- Pilih Tour --</option>
                                    @foreach ($tour_packages as $tour_package)
                                        <option value="{{ $tour_package->id }}">
                                            {{ $tour_package->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="image" placeholder="Pilih Image">
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