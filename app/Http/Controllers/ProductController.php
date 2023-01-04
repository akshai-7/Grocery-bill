<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bill;
use Illuminate\Support\Facades\Auth;
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
            'address'=>'required|max:50',
            'mobile'=>'required',
            'grandtotal=>requireed',
            'productname'=>'required',
            'price'=>'required',
            'qty'=>'required',
            'subtotal'=>'required',
            'tax'=>'required',
            'taxamount'=>'required',
            'total'=>'required',
        ]);

        $bill = new Bill();
        $bill->bill_number = $request['billno'];
        $bill->date=$request['date'];
        $bill->name=$request['name'];
        $bill->address=$request['address'];
        $bill->mobile=$request['mobile'];
        $bill->grandtotal=$request['grandtotal'];
        $bill->save();

        $user = new Product();
        // $user->bill_id =auth()->bills()->id;;
        $user->productname = $request['productname'];
        $user->price = $request['price'];
        $user->qty = $request['qty'];
        $user->subtotal = $request['subtotal'];
        $user->tax= $request['tax'];
        $user->taxamount =$request['taxamount'];
        $user->total = $request['total'];
        $user->save();

        return redirect('/productlist');
    }
    public function productlist(){

        return view('/productlist');
    }
}
