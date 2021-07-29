<?php

namespace App\Http\Controllers;

use App\TourPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug) {

        $item = TourPackage::with(['images'])->where('slug', $slug)->firstOrFail();

        return view('pages.detail', [
            'item' => $item
        ]);
    }
}
