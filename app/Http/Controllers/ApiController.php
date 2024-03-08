<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class ApiController extends Controller
{
    public function getProducts(Request $request){
        if(isset($request->price_start) && isset($request->price_end) && !empty($request->price_start) && !empty($request->price_end) && isset($request->category) && !empty($request->category)){
            $cateId = Category::select('id')->where('name',$request->category)->pluck('id')->first();
            
            $products = Product::whereBetween('price', [$request->price_start, $request->price_end])->where('category_id',$cateId)->with('category')->get();
        }elseif(isset($request->price_start) && isset($request->price_end) && !empty($request->price_start) && !empty($request->price_end)){
            $products = Product::whereBetween('price', [$request->price_start, $request->price_end])->with('category')->get();
        }else{
            $products = Product::with('category')->get();
        }
        
        
        return response()->json(['status'=>true,'msg'=>'Product List','data'=>$products]);
    }

}
