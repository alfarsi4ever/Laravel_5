<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Manufacture;
class ProductsController extends Controller
{
    public function list() {
        $ProductsActive = Product::Active()->get();
        $ProductsInactive = Product::Inactive()->get();
        $Manufactures = Manufacture::all();
        return View('list',compact('ProductsActive','ProductsInactive','Manufactures'));
    }


    public function create(){

        $data = request()->validate([
            'company_id'=>'required',
            'name'=>'required',
            'color'=>'',
            'price'=>'',
            'status'=>''
        ]);    

        Product::create($data);

        // $products = new Product();
        // $products->name=request('name');
        // $products->color=request('color');
        // $products->price=request('price');
        // $products->status=request('status');
        // $products->save();

        return back();
    }
}
