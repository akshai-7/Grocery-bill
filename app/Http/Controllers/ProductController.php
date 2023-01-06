<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bill;
use Illuminate\Support\Facades\DB;
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
        $bill->bill_number = $request ['billno'];
        $bill->date=$request['date'];
        $bill->name=$request['name'];
        $bill->address=$request['address'];
        $bill->mobile=$request['mobile'];
        $bill->grandtotal=$request['grandtotal'];
        $bill->save();


// dd($request->all());
// $product = $request->all();
// foreach($product as $item){
//     $user = new Product();
//     $user->bill_id = $bill->id;
//     $user->productname = $item['productname'];
//     $user->price = $item['price'];
//     $user->qty = $item['qty'];
//     $user->subtotal = $item['subtotal'];
//     $user->tax= $item['tax'];
//     $user->taxamount =$item['taxamount'];
//     $user->total = $item['total'];
//     $user->save();

// }

$data= $request->all();
// dd($data['productname']);
$user = new Product();
// $user->bill_id=$bill['billno'];
if($data['billno']){
foreach($data['productname'] as  $row => $value){
    $data1=array(
    'bill_id'=>$bill->id,
    'productname'=> $data['productname'][$row],
    'price'=>$data['price'][$row],
    'qty'=> $data['qty'][$row],
    'subtotal'=> $data['subtotal'][$row],
    'tax'=> $data['tax'][$row],
    'taxamount'=> $data['taxamount'][$row],
    'total'=> $data['total'][$row],
    );
    Product::create($data1);
}
}



        // return redirect('/productlist');
    }
    public function productlist(){

        return view('/productlist');
    }
}
