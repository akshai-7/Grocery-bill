<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bill;
class ProductController extends Controller
{
    public function create(){
        return view('/index');
    }
    public function store(Request $request){
        $request->validate([
            'billno'=>'required',
            'date'=>'required',
            'name'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'productname'=>'required',
            'price'=>'required',
            'qty'=>'required',
            'subtotal'=>'required',
            'tax'=>'required',
            'taxamount'=>'required',
            'total'=>'required',
        ]);

        $billno = $request->input('billno');
        $date = $request->input('date');
        $name =  $request->input('name');
        $address = $request->input('address');
        $mobile = $request->input('mobile');
        $productname = $request->input('productname');
        $price = $request->input('price');
        $qty = $request->input('qty');
        $subtotal = $request ->input('subtotal');
        $tax = $request -> input('tax');
        $taxamount= $request -> input('taxamount');
        $total = $request->input('total');

        $user = new Bill ;
        $user->billno= $billno;
        $user->date=$date;
        $user->name=$name;
        $user->address=$address;
        $user->mobile=$mobile;
        $user->save();

        $user = new Product;
        $user->productname = $productname;
        $user->price = $price;
        $user->qty = $qty;
        $user->subtotal = $subtotal;
        $user->tax= $tax;
        $user->taxamount = $taxamount;
        $user->total = $total;
        $user->save();

        return redirect('/productlist');
    }
    public function productlist(){

        return view('/productlist');
    }
}
