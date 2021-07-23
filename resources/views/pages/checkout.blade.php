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
                            <li class="breadcrumb-item align-items-center d-flex"><i class="las la-suitcase"></i><a href="{{ route('detail') }}"> Detail</a></li>
                            <li class="breadcrumb-item active align-items-center d-flex"><i class="las la-comment-dollar"></i><a href="{{ route('checkout') }}"> Checkout</a></li>
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
                                    <h2>Data Member</h2>
                                    <p>
                                        Tour to Raja Ampat, Papua, Indonesia
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
                                                <tr>
                                                    <td>
                                                        <img src="{{ url('frontend/images/img-userjoin-4.png') }}" alt="Foto Profil">
                                                    </td>
                                                    <td class="align-middle">
                                                        Renaldi
                                                    </td>
                                                    <td class="align-middle">
                                                        IND
                                                    </td>
                                                    <td class="align-middle">
                                                        -
                                                    </td>
                                                    <td class="align-middle">
                                                        -
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#"><i class="las la-times-circle" style="font-size: 24px; color: #e74c3c;"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ url('frontend/images/img-userjoin-1.png') }}" alt="Foto Profil">
                                                    </td>
                                                    <td class="align-middle">
                                                        Kelvin
                                                    </td>
                                                    <td class="align-middle">
                                                        IND
                                                    </td>
                                                    <td class="align-middle">
                                                        -
                                                    </td>
                                                    <td class="align-middle">
                                                        -
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#"><i class="las la-times-circle" style="font-size: 24px; color: red;"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="member mt-3">
                                        <h2 class="">Add Member</>
                                        <form class="form-inline my-3">
                                            <label for="inputUsername" class="sr-only">Name</label>
                                            <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2" 
                                            id="inputUsername" placeholder="Username">
        
                                            <label for="inputVisa" class="sr-only">Visa</label>
                                            <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                                <option value="VISA" selected>VISA</option>
                                                <option value="30 Days">30 Days</option>
                                                <option value="N/A">N/A</option>
                                            </select>
        
                                            <label for="doePassport" class="sr-only">DOE Passport</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <input type="text" class="form-control datepicker" 
                                                id="doePassport" placeholder="DOE Passport">
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
                                                2 Orang
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">Additional VISA</th>
                                            <td width="50%" class="text-right">
                                                -
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">Trip Price</th>
                                            <td width="50%" class="text-right">
                                                Rp. 970.000 / Person
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="50%">Sub Total</th>
                                            <td width="50%" class="text-right">
                                                Rp. 1.040.000
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
                                    <a href="{{ route('checkout-success') }}" class="btn btn-block btn-confirm-transaksi py-2">
                                        Join Now
                                    </a>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="{{ route('home') }}" class="text-muted">
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
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<i class="las la-calendar"></i>'
                }
            })
        });
    </script>
@endpush