<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Session;
class PagesController extends Controller
{
    //
    public function home(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
      /*  $products = DB::table('products')
                        ->get();
            return view('pages.services')->with('products',$products);
                        */
        $products = Product::inRandomOrder()->paginate(3);                     
        return view('pages.services')->with('products',$products);
    }
    public function show($id){
       /* $product = DB::table('products')
                        ->where('id',$id)
                        ->first();*/
    $product = Product::find($id);
        return view('pages.show')->with('product' , $product);
    }
   /* public function create(){
        return view('pages.create');

    }*/
    public function saveproduct(Request $request){
        /*
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price] = $request->product_price;
        $data['product_description] = $request->product_description;
        DB::table('products)
            ->insert($data);
        */
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
        $product->save();
        Session::put('success','The Product Is Saved successfully');
        return redirect('/create');
    }
    public function create(){
        return view('pages.create');
    }
}
