<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsrfVerificationController extends Controller
{
    public function index()
    {
        return view('csrf-verification-bypass');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
