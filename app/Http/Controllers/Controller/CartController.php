<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\GoodsModel;
use App\Model\Cart;
class CartController extends Controller
{
    //
    public function cart(){
        $cart = Cart::where('uid',session('login')->id)->pluc('goods_id');
        dd($cart);
    }
    
}