<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\Users;


class Admincontroller extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function admin_login(Request $request)
    {
        //validate data 
        $users = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
         $users['role'] = 'admin';
        if (Auth::attempt($users)) {
            $request->session()->regenerate();
            //echo "HELLO";die;
           // return redirect()->route('dashboard');
        }
       // return redirect()->route('login');
        
    }

    public function dashboard()
    {
       return view('admin.dashboard');
    }
    public function users()
    {
        $user = Users::paginate(4);
        return view('admin.users',['data'=> $user]);
 
       //return view('admin.users');
    }
    
    
    public function order()
    {
       return view('admin.order');
    }
    
    public function category()
    {
        // $categorie = DB::table('categories')->paginate(4);
        $categorie = Categorie::paginate(4);
       return view('admin.categorie',['data'=> $categorie]);
    }
   
    public function add_category()
    {
       return view('admin.add_categorie');
    }
    public function category_add(Request $request){
      
     $add_categorie = new Categorie();
     $add_categorie->categorie_name = $request->categorie_name;
     $file = Storage::putFile('photos', $request->file('image'));
     $add_categorie->image = $file;
     $add_categorie->short_description = $request->short_description;
     $add_categorie->description = $request->description;
     $data_save = $add_categorie->save();
     if($data_save){
         //return ('success');
         return redirect()->route('admin.category');
     }else{
         return ('failed');
     }
     }

     public function show(string $id)
    {
        $categorie = DB::table('categories')->where('id',$id)->first();
       
        //dd($order);
         return view('admin.update_categorie',['data'=>$categorie]);
    }

    public function update(Request $request, string $id)
    {
        $postData = $request->all();
        unset($postData['_token']);
        unset($postData['submit']);
        $categorie = DB::table('categories')
            ->where('id', $id)
            ->update($postData);
            
        if ($categorie) {
            //echo "Data Successfull Update";
            return redirect()->route('admin.category');
        } else {
            echo "Data not Successfull Update";
        }
    }

     public function delete(string $id)
     {
         $categorie = DB::table('categories')
         ->where('id', $id)
         ->delete();
     if ($categorie) {
         // echo "Data Successfull ";
         return redirect()->route('admin.category');
     } else {
         echo "Data not Successfull ";
     }
     }
    public function add_product()
    {
        $categorie=  Categorie::all(); 
       return view('admin.add_product',['data' => $categorie]);
    }
    public function product()
    {
        //$product = DB::table('products')->get();
        $categorie=  Categorie::all(); 
        //$product = product::paginate(4);
        $product = Product::join('categories', 'Products.categorie_id', '=', 'categories.id')
        ->get(['Products.*', 'categories.categorie_name']);
       return view('admin.product',['data'=> $product, 'cat_data' => $categorie]);
    }
   
    public function addproduct(Request $request){
     // dd($request->categorie_id);
      
      
      $addproduct = new Product();
      $addproduct->categorie_id = $request->categorie_id;
      $file = Storage::putFile('photos', $request->file('image'));
      $addproduct->image = $file;
      $addproduct->product_name = $request->product_name;
      $addproduct->product_price = $request->product_price;
      $addproduct->product_quantity = $request->product_quantity;
      $addproduct->short_description = $request->short_description;
      $addproduct->description = $request->description;
      $save = $addproduct->save();
      if($save){
          //return ('success');
          return redirect()->route('admin.product');
      }else{
          return ('failed');
      }
      }

      public function editshow(string $id)
    {
        $product = DB::table('products')->where('id',$id)->first();
       
        //dd($order);
         return view('admin.update_product',['data'=>$product]);
    }

    public function edit(Request $request, string $id)
    {
        $postData = $request->all();
        unset($postData['_token']);
        unset($postData['submit']);
        $product = DB::table('products')
            ->where('id', $id)
            ->update($postData);
            
        if ($product) {
            //echo "Data Successfull Update";
            return redirect()->route('admin.product');
        } else {
            echo "Data not Successfull Update";
        }
    }
      public function destroy(string $id)
    {
        $product = DB::table('Products')
        ->where('id', $id)
        ->delete();
    if ($product) {
        // echo "Data Successfull ";
        return redirect()->route('admin.product');
    } else {
        echo "Data not Successfull ";
    }
    }
}
