<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    protected $guarded = [
        'item_id', 'user_id'
    ];

    public function item()
    {
    return $this->belongsTo('\App\Models\Item');
    }

    public function showCart()
   {
    $user_id = Auth::id();
    return $this->where('user_id',$user_id)->get();
   }

    public function addCart($item_id)
   {
       $user_id = Auth::id(); 
       $cart_add_info = Cart::firstOrCreate(['item_id' => $item_id,'user_id' => $user_id]);

       if($cart_add_info->wasRecentlyCreated){
           $message = 'カートに追加しました';
       }
       else{
           $message = 'カートに登録済みです';
       }

       return $message;
   }
}
