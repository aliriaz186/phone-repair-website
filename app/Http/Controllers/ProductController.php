<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function store(Request $request){
        $product= new Product();
        $fileName="";
        if($request->hasFile('image')){
            $brand_logo= $request->file('image');
            $fileName = time().'.'.$brand_logo->getClientOriginalExtension();
            $request->image->move(public_path('images/products'), $fileName);
            if(!File::exists(public_path('images/products/'. $fileName))) {  // check file exists in directory or not
                return json_encode("Image is not uploaded!", 401);
            }
            $input["image"] = $fileName;
        }
        $product->image=$fileName;
        $product->name=$request->productName;
        $product->price=$request->productPrice;
        $product->description=$request->productDescription;
         $result=$product->save();
         if ($result){
             return redirect('shops');
         }
         else{
             return json_encode("server error");
         }
    }
    public function shop(){
        $product=Product::all();
        return view('template/frontEnd/pages/shops')->with(['products'=>$product]);
    }

    public function shopDetails($id)
    {
        $product = Product::where('id',$id)->first();
        return view('template/frontEnd/pages/shop-details')->with(['products' => $product]);
    }
}
