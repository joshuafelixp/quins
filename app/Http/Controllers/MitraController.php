<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function show($id)
    {
        return view('mitra', [
            'title' => '| ',
            'css' => '',
            "mitras" => Mitra::where('service_id', $id)->get()
        ]);
    }
}
