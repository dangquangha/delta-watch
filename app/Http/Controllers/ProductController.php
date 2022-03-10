<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listing()
    {
        return view('pages.listing.index');
    }

    public function detail()
    {
        return view('pages.detail.index');
    }
}
