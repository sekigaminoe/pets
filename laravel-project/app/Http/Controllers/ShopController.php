<?php

namespace App\Http\Controllers;

use App\Models\Item;

use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\Thanks;

class ShopController extends Controller
{
   public function index()
   {
    $items = Item::Paginate(6);
   //  $keyword = $request->input('keyword');
   //  if(!empty($keyword)) {
   //    $companies->where('name', 'LIKE', "%{$keyword}%")
   //    ->orwhereHas('items', function ($query) use ($keyword) {
   //    $query->where('name', 'LIKE', "%{$keyword}%");
   //    })->get();
   // }
    return view('shop', compact('items'));
   }

   public function myCart(Cart $cart)
   {
    $data = $cart->showCart();
    return view('mycart', $data);
   }

   public function addMycart(Request $request,Cart $cart)
   {

    $item_id = $request->item_id;
    $message = $cart->addCart($item_id);

    $data = $cart->showCart();

    return view('mycart',$data)->with('message', $message);

   }

   public function deleteCart(Request $request, Cart $cart)
   {
      $item_id=$request->item_id;
      $message = $cart->deleteCart($item_id);

      $my_carts = $cart->showCart();

      return view('mycart',compact('my_carts' , 'message'));
   }

   public function checkout(Request $request, Cart $cart)
   {
      $user = Auth::user();
      $mail_data['user']=$user->name;
      $mail_data['checkout_items']=$cart->checkoutCart();
      Mail::to($user->email)->send(new Thanks($mail_data));
      return view('checkout');
   }

}
