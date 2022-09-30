<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('product', [
            'title' => '| Product',
            'css' => 'css/product_style.css',
            'services' => Service::all()
        ]);
    }
    public function show(Service $mitra)
    {
        return view('mitra', [
            'title' => '| ',
            'css' => '',
            "mitras" => $mitra->mitra
        ]);
    }
}
