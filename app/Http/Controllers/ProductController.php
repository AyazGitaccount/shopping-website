<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    //
    function index()
    {
        $data= ProductModel::all();
        return view('ProductSlider',['products'=>$data]);
    }
    function productdetailFunc($id)
    {
         $data= ProductModel::find($id);
        return view('productDetail',['product'=>$data]);

    }
}
