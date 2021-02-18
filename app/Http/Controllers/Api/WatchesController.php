<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WatchesController extends Controller
{

    public function getWatches(){
        $watches = DB::table('watches')->get();
        if($watches) return $watches;
        else return "Error whille get watches";
    }
    
    public function getWatch($id){
        $watch = DB::table('watches')->where('id',$id)->get();
        if($watch) return $watch;
        else return "Error while get watch";
    }
}
