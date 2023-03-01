<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function insert(Request $request)
    {
        $name = $request->get('p_name');
        $price = $request->get('p_price');
        $p_image = $request->file('p_image')->getClientOriginalName();
        $request->p_image->move(public_path('images'),$p_image);
       
    }
}
