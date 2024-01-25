<?php

namespace App\Http\Controllers;


use App\Models\produk;
use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    public function index(){
        $data = produk::all();
        return response()->json($data);
    }
}
