<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getWatchesFromCart(){
        $cartItems = DB::table('cart')->get();
        $totalPrice = 0;
        
        if($cartItems) {
            foreach($cartItems as $item){
                $totalPrice+=$item->price;
            }
            return [$cartItems,$totalPrice];
        }
        else return "Cannot get cart items";
    }

    public function addWatchToCart($id){
        $candidate = DB::table('cart')->where('id',$id)->get();
        if(count($candidate)<=0){
            $data = DB::table('watches')->where('id',$id)->get();
            $save = DB::table('cart')->insert(
                [
                    'id'=>$data[0]->id,
                    'title'=>$data[0]->title,
                    'description'=>$data[0]->description,
                    'text'=>$data[0]->text,
                    'price'=>$data[0]->price,
                    'img'=>$data[0]->img
                ]
            );
            if($save) return "Added succesfully";
            else return "Something went wrong";
        }else{
            return "Already exists";
        }
    }

    public function removeWatchFromCart($id){
        $candidate = DB::table('cart')->where('id',$id)->get();
        if(count($candidate)>0){
            $priceToRemove = $candidate[0]->price;
            $remove = DB::table('cart')->where('id',$id)->delete();
            if($remove) return  $priceToRemove;
            else return "Something went wrong";
        }else{
            return "Item with this id doesn't exists";
        }
    }
}
