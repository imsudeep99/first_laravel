<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\Categorie;
use App\Models\Product;
class Indexcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $category = Categorie::all();
        $women = Product::where('categorie_id',11)->get();
        $men = Product::where('categorie_id',12)->get();
        $kid = Product::where('categorie_id',13)->get();
        // dd($women);
        return view('index.index',['cat'=> $category, 'women' =>$women, 'men' =>$men, 'kids' =>$kid]);
    }

    public function products(Request $request, $id){
        $products = Product::where('categorie_id',$id)->get();
        return view('index.products', ['product' => $products]);
    }

    public function product(Request $request, $id){
        $product = Product::where('id',$id)->first();
        // dd($product);
        return view('index.product',['product'=>$product]);
    }
}
