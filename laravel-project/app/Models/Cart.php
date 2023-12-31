<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    protected $fillable = [
        'item_id', 'user_id',
    ];

    public function item()
    {
    return $this->belongsTo('\App\Models\Item');
    }

    public function showCart()
   {
    $user_id = Auth::id();
    $data['my_carts'] = $this->where('user_id',$user_id)->get();

    $data['count']=0;
    $data['sum']=0;
       
    foreach($data['my_carts'] as $my_cart){
        $data['count']++;
        $data['sum'] += $my_cart->item->fee;
    }
       return $data;
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

   public function deleteCart($item_id)
   {
    $user_id = Auth::id();
    $delete = $this->where('user_id', $user_id)->where('item_id', $item_id)->delete();

    if ($delete > 0) {
        $message = 'カートから一つの商品を削除しました';
    } else {
        $message = '削除に失敗しました';
    }
    return $message;
   }

   public function checkoutCart()
   {
       $user_id = Auth::id(); 
       $checkout_items=$this->where('user_id', $user_id)->get();
       $this->where('user_id', $user_id)->delete();

       return $checkout_items;     
   }
}
