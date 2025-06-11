<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccesController extends Controller
{
    public function index()
    {
        // Logic for the success page
        return view('succes');
    }
}
