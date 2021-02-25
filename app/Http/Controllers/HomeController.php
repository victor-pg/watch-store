<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $watches = DB::table('watches')->get();

        return view('home')->with('watches', $watches);
    }
    public function add()
    {
        return view('add');
    }
    public function save(Request $request)
    {

        $body = $request->all();
        if ($request->hasFile('watch-img')) {
            $file = $request->file('watch-img');
            $fileName = $file->getClientOriginalName();
            $request->file('watch-img')->move(public_path("img/"), $fileName);

            $title = $body['title'];
            $candidate = DB::table('watches')->where('title', $title)->value('title');
            if($candidate) {
                return "<script>alert('Deja exista')</script>";
            }else{
                DB::table('watches')->
                insert([
                    'title'=>$body['title'],
                    'description'=>$body['description'],
                    'text'=>$body['content'],
                    'price'=>$body['price'],
                    'img'=>$fileName
                ]);
                return redirect("/home");
            };
        } 
    }

    public function edit($id){
        $item = DB::table('watches')->where('id',$id)->get();

        return view('edit')->with("item",$item);
    }

    public function editSave(Request $request,$id){
        $body = $request->all();
        if ($request->hasFile('watch-img')) {
            $file = $request->file('watch-img');
            $fileName = $file->getClientOriginalName();
            $request->file('watch-img')->move(public_path("img/"), $fileName);
            
            DB::table('watches')->where('id',$id)->update(
                [
                    'title'=>$body['title'],
                    'description'=>$body['description'],
                    'text'=>$body['content'],
                    'price'=>$body['price'],
                    'img'=>$fileName
                ]);
            return redirect("/home");
        }else{
            return "Error, no image";
        }
    }

    public function delete($id){
        $try = DB::table('watches')->where('id',$id)->delete();
        if($try) return redirect("/home");
        else return "Delete error";
    }
}
