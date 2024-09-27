<?php

namespace App\Http\Controllers\web;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index()
    {
        return view('web.about');
    }
}
