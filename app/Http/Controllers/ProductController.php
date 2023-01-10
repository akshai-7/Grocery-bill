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
            return view('/customerlist',['bills'=>$bills]);
    }

    public function productlist($id){
            $users = Bill::with('product')->whereId($id)->first();
            return view('/productlist',['users'=>$users] );
    }

    public function delete($id){
            $bills =  Bill::find($id);
            $bills->delete();


            return redirect('/customerlist');
    }
    public function edit($bill_id){
// dd($bill_id);
// $user=Bill::find($bill_id);
        $user = Bill::with('product')->whereId($bill_id)->first();
        // $user = Bill::with('product')->where('name', 'mani')->first();
        // $user = Bill::with('product')->orwhere('name', 'mani')->first();
        // $user = Bill::find($id);
        // $user = Bill::pluck('Akshai','name');
        // $user = Product::with('bills')->count();
        // $user = Bill::with('product')->count();
        // $user = Bill::with('product')->orderBy('name');
        // $user = Product::with('bills')->max('price');
        // $user = Product::with('bills')->avg('total');
        // $user = Product::with('bills')->distinct('1','2');
        // $user = Product::with('bills')->select('total');
        // $user = Product::with('bills') ->groupBy('subtotal');
        // $user = Product::with('bills') ->sum('subtotal');
        // $user = Product::with('bills') ->min('subtotal');
        // $user = Product::with('bills') ->latest('id');
        // $user = Product::with('bills') ->limit('total');
        // $user = Product::with('bills') ->offset('total');
        // $user = Product::with('bills')->groupBy('price')->having('price','>','100');
        // dd($user);

        // return view ('/edit',['user'=>$user]);
        // $user = Product::with('bills')->whereId($bill_id)->first();
        return view ('/edit',['user'=>$user]);


    }


    public function update(Request $request,$id){
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

        $bill = Bill::find($id);
        $bill->bill_number = $request ['billno'];
        $bill->date=$request['date'];
        $bill->name=$request['name'];
        $bill->address=$request['address'];
        $bill->mobile=$request['mobile'];
        $bill->grandtotal=$request['grandtotal'];
        $bill->save();


        $data= $request->all();
        // dd($data);
// $data =Product::find($id);
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
        // dd($data1);
        // $data1->save();
        // $user =Product::find($id);
        // $user->productname = $request ['productname'];
        // // $user->productname = $request->input('productname');
        // $user->price = $request->input('price');
        // $user->qty = $request->input('qty');
        // $user->subtotal = $request->input('subtotal');
        // $user->tax= $request->input('tax');
        // $user->taxamount= $request->input('taxamount');
        // $user->total= $request->input('total');
        // $user->save();

        return redirect('/customerlist');
    }
    }
}
}
