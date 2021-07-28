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
              <li class="active">Transaksi Detail</li>
            </ol>
            <h1 class="h3 mb-0 text-gray-800">Detail Transaksi {{ $item->user->name }}</h1>
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
                        <table class="table table-bordered">
                            @php
                                $i = 1;
                                $h = 1;
                            @endphp
                            <tr>
                                <th>ID</th>
                                <td>{{ $i++ }}</td>
                            </tr>
                            <tr>
                                <th>Tiket Tour</th>
                                <td>{{ $item->tour_package->title }}</td>
                            </tr>
                            <tr>
                                <th>Customer</th>
                                <td>{{ $item->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Additional Visa</th>
                                <td>{{ $item->additional_visa }}</td>
                            </tr>
                            <tr>
                                <th>Total Transaksi</th>
                                <td>{{ $item->transaction_total }}</td>
                            </tr>
                            <tr>
                                <th>Status Transaksi</th>
                                <td>{{ $item->transaction_status }}</td>
                            </tr>
                            <tr>
                                <th>Data Customer Booking</th>
                                <td>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Kewarganegaraan</th>
                                            <th>Visa</th>
                                            <th>DOE Pasport</th>
                                        </tr>
                                        @foreach ($item->details as $detail)
                                            <tr>
                                                <td>{{ $detail->id }}</td>
                                                <td>{{ $detail->username }}</td>
                                                <td>{{ $detail->nationality }}</td>
                                                <td>{{ $detail->is_visa ? '30 Days' : 'None' }}</td>
                                                <td>{{ $detail->doe_passport == '' ? 'Tidak ada' : $detail->doe_passport  }}</td>
                                            </tr>
                                        @endforeach
                                    </table>    
                                </td>
                            </tr>
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