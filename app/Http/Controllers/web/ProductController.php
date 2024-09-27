<?php

namespace App\Http\Controllers\web;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function kraftpaper()
    {
        return view('web.kraftpaper');
    }

    public function duplexboard()
    {
        return view('web.duplexboard');
    }
}
