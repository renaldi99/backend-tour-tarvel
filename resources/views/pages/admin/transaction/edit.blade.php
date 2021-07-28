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
              <li class="active">Transaksi</li>
            </ol>
            <h1 class="h3 mb-0 text-gray-800">Edit Status Transaksi {{ $item->title }}</h1>
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
                        <form action="{{ route('transaction.update', $item->id) }}" method="POST">
                            @method ('put')
                            @csrf
                            <div class="form-group">
                                <label for="transaction_status">Status</label>
                                <select name="transaction_status" required class="form-control">
                                    <option value="{{ $item->transaction_status }}">-- Jangan Diubah ({{ $item->transaction_status }}) --</option>
                                    <option value="IN_CART">IN_CART</option>
                                    <option value="PENDING">PENDING</option>
                                    <option value="SUCCESS">SUCCESS</option>
                                    <option value="CANCEL">CANCEL</option>
                                    <option value="FAILED">FAILED</option>
                                </select>
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