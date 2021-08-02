@extends('layouts.checkout')

@section('title', 'Checkout Payment')

@section('content')
<main>
    <section class="section-checkout">
        <div class="container">
            <div class="row">
                <div class="col p-md-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item align-items-center d-flex"><i class="la la-home"></i><a href="{{ route('home') }}"> Home</a></li>
                            <li class="breadcrumb-item align-items-center d-flex"><i class="las la-suitcase"></i><a href="{{ route('detail', $item->tour_package->slug) }}"> Detail</a></li>
                            <li class="breadcrumb-item active align-items-center d-flex"><i class="las la-comment-dollar"></i><a href="{{ route('checkout', $item->id) }}"> Checkout</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">
                    <div class="section-checkout-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card card-checkout">

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <h2>Data Member</h2>
                                    <p>
                                        Tour to {{ $item->tour_package->title }}, {{ $item->tour_package->location }}
                                    </p>
                                    <div class="attendee">
                                        <table class="table table-responsive-sm text-center">
                                            <thead>
                                                <tr>
                                                    <td>Foto Profil</td>
                                                    <td>Nama</td>
                                                    <td>Kewarganegaraan</td>
                                                    <td>Visa</td>
                                                    <td>Passport</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($item->details as $detail)
                                                <tr>
                                                    <td>
                                                        <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" alt="Foto Profil" class="rounded-circle">
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $detail->username }}
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $detail->nationality }}
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $detail->is_visa ? '30 Days' : 'None' }}
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="{{ route('checkout-remove', $detail->id) }}"><i class="las la-times-circle" style="font-size: 24px; color: #e74c3c;"></i></a>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">
                                                        Empty Data
                                                    </td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="member mt-3">
                                        <h2 class="">Add Member</>
                                        <form class="form-inline my-3" method="POST" action="{{ route('checkout-create', $item->id) }}">
                                            @csrf
                                            <label for="username" class="sr-only">Name</label>
                                            <input type="text" name="username" required class="form-control mb-2 mr-sm-2" 
                                            id="username" placeholder="Username">
                                            
                                            <label for="nationality" class="sr-only">Nationality</label>
                                            <input type="text" name="nationality" required class="form-control mb-2 mr-sm-2" style="width: 50px" 
                                            id="nationality" placeholder="Nationality">
                                            
                                            <label for="is_visa" class="sr-only">Visa</label>
                                            <select name="is_visa" id="is_visa" required class="custom-select mb-2 mr-sm-2">
                                                <option value="VISA" selected>VISA</option>
                                                <option value="1">30 Days</option>
                                                <option value="0">None</option>
                                            </select>
        
                                            <label for="doe_passport" class="sr-only">DOE Passport</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <input type="text" class="form-control datepicker" 
                                                id="doe_passport" name="doe_passport" placeholder="DOE Passport">
                                            </div>
        
                                            <button type="submit" class="btn btn-add-now mb-2 px-4">
                                                Add Now
                                            </button>
        
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-informasi-transaksi">
                                    <h2>
                                        Informasi Transaksi
                                    </h2>
                                    <table class="informasi-transaksi">
                                        <tr>
                                            <th width="50%">Members</th>
                                            <td width="50%" class="text-right">
                                                {{ $item->details->count() }} Person
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">Additional VISA</th>
                                            <td width="50%" class="text-right">
                                                Rp. {{ $item->additional_visa }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">Trip Price</th>
                                            <td width="50%" class="text-right">
                                                Rp. {{ $item->tour_package->price }} / Orang
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">Sub Total</th>
                                            <td width="50%" class="text-right">
                                                Rp. {{ $item->transaction_total }}
                                            </td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <div class="payment">
                                        <div class="payment-logo d-flex justify-content-center">
                                            <img src="{{ url('frontend/images/gopay.png') }}" alt="Logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="confirm-transaksi">
                                    <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-confirm-transaksi py-2">
                                        Confirm Payment
                                    </a>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="{{ route('detail', $item->tour_package->slug) }}" class="text-muted">
                                        Cancel Booking
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<i class="las la-calendar"></i>'
                }
            })
        });
    </script>
@endpush