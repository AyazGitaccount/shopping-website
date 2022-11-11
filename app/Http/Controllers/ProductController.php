<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Session;

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
    function search(Request $req)
    {
         $data = ProductModel::where('name','like','%'.$req->input('query').'%')->get();
         return view('search',['product'=>$data]);
    }
    function addTOcart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart-> user_id = $req->session()->get('user')['id'];
            $cart ->_product_id= $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/home-loginpage');
        }
    }

    static function cartitem()
    {
        // $user_id =Session::get('user')['id'];

        $user_id = session()->get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }
    static function cart_list()
    {
        $user_id = session()->get('user')['id'];
        $data =  DB::table('cart')
        ->join('_product','cart._product_id','_product.id')
        ->select('_product.*','cart.id as cart_id')
        ->where('cart.user_id',$user_id)
        ->get();
        return view('cart_items',['_product'=>$data]);
    }
    function RemoveItem($id)
    {
        echo Cart::destroy($id);
        //  DB::table('cart')->whereIn('id',$id->id)->delete();
        return redirect('cart_list');
    }
}
