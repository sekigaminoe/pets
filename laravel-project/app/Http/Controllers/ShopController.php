<?php

namespace App\Http\Controllers;

use App\Models\Item;

use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ShopController extends Controller
{
   public function index()
   {
    $items = Item::Paginate(6);
    return view('shop', compact('items'));
   }

   public function myCart(Cart $cart)
   {
    $my_carts = $cart->showCart();
    return view('mycart',compact('my_carts'));
   }

   public function addMycart(Request $request,Cart $cart)
   {

       $item_id=$request->item_id;
       $message = $cart->addCart($item_id);

       $my_carts = $cart->showCart();

       return view('mycart',compact('my_carts' , 'message'));

   }

}
