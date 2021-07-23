<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $requesst) {
        return view('pages.checkout');
    }

    public function success(Request $request) {
        return view('pages.success');
    }
}
