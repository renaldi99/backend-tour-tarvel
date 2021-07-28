<?php

namespace App\Http\Controllers;

use App\TourPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = TourPackage::with(['images'])->get();
        return view('pages.home', [
            'items' => $items
        ]);
    }
}
