<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bill;
use Illuminate\Support\Facades\Response;


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

        $data= $request->all();
        // dd($data);

        if($data['productname']){
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
        return redirect('/customerlist');
    }

    public function customerlist(){
            $bills= Bill::all();
            // dd($bill);
            return view('/customerlist',['bills'=>$bills]);
    }

    public function productlist($id){
            // $products = Product::all();
            // return view('/productlist');

            $users = Bill::with('product')->whereId($id)->first();
            // dd($users);
            return view('/productlist',['users'=>$users] );
            // return Response::json($users);
    }

    public function delete($id){
            $bills = Bill::find($id);
            $bills->delete();
            return redirect('/customerlist');
    }
}
