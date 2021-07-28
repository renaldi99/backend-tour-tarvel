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
            <a href="{{ route('tour-package.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fa fa-plus"></i> Tambah Tiket Tour
            </a>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Lokasi</th>
                                    <th>Keberangkatan</th>
                                    <th>Tipe</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($items as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->departure }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <a href="{{ route('tour-package.edit', $item->id) }}" class="btn btn-info" style="margin-bottom: 4px">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('tour-package.destroy', $item->id) }}" method="POST" class="d-inlin">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <th colspan="7" class="text-center">
                                            Data Kosong
                                        </th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- /.content -->
</div>
@endsection
{{-- Dashboard --}}