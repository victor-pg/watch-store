<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getWatchesFromCart(){
        $cartItems = DB::table('cart')->get();
        if($cartItems) return $cartItems;
        else return "Cannot get cart items";
    }

    public function addWatchToCart($id){
        $candidate = DB::table('cart')->where('id',$id)->get();
        if(count($candidate)<=0){
            $save = DB::table('cart')->insert(['id'=>$id]);
            if($save) return "Added succesfully";
            else return "Something went wrong";
        }else{
            return "Already exists";
        }
    }

    public function removeWatchFromCart($id){
        $candidate = DB::table('cart')->where('id',$id)->get();
        if(count($candidate)>0){
            $remove = DB::table('cart')->where('id',$id)->delete();
            if($remove) return "Removed succesfully";
            else return "Something went wrong";
        }else{
            return "Item with this id doesn't exists";
        }
    }
}
