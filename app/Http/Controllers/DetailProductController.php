<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function index()
    {
        // Later you can pass product data from database
        return view('detailproduct');
    }
}
