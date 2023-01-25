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
            'address'=>'required|max:50',
            'mobile'=>'required|max:10|min:10',
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


        // $user = new Product();
        // $user->bill_id= $bill-> id;
        // $user->productname=$request['productname'];
        // $user->price=$request['price'];
        // $user->qty=$request['qty'];
        // $user->subtotal=$request['subtotal'];
        // $user->tax=$request['tax'];
        // $user->taxamount=$request['taxamount'];
        // $user->total=$request['total'];
        // $user->save();

        $data= $request->all();
        if($data['productname']){
        foreach($data['productname'] as $row => $value){
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
        return response()->json($data);
    }

    public function customerlist(){
            $bills= Bill::all();
            return view('/customerlist',['bills'=>$bills]);
            return response()->json($bills);
    }

    public function productlist($id){
            $users = Bill::with('product')->whereId($id)->first();
            return view('/productlist',['users'=>$users] );
            return response()->json($users);
    }

    public function delete($id){
            $bills =  Bill::find($id);
            $bills->delete();
            return redirect('/customerlist');
    }


    public function edit($bill_id){
// dd($bill_id);

        $user = Bill::with('product')->whereId($bill_id)->first();

        // $user = Bill::with('product')->whereIn('id', [1,2,3,4])->get();
        // $user = Bill::with('product')->whereNotNull('id')->get();
        // $user1 = Bill::all();
        // $user = Bill::with('product')->orwhere('name', 'mani')->pluck('name');
        // $user = Bill::with('product')->where('name', 'mani')->value('address');
        // $user = Bill::findOrFail(5);
        // $user = Bill::find($bill_id);
        // $user = Bill::pluck('id','name',);
        // $user = Bill::count();
        // $user = Product::count();
        // $user = Bill::with('product')->orderBy('name');
        // $user = Product::with('bills')->max('price');
        // $user = Product::with('bills')->avg('total');
        // $user = Product::with('bills')->distinct('1','2');
        // $user = Product::with('bills') ->groupBy('subtotal');
        // $user = Product::with('bills') ->sum('subtotal');
        // $user = Product::with('bills') ->min('subtotal');
        // $user = Product::with('bills') ->latest('id');
        // $user = Product::limit('3');
        // $user = Product::with('bills') ->offset('total');
        // $user = Product::with('bills')->groupBy('price')->having('price','>','100');
        // dd($user);

        // $user = Bill::with('product')->whereId($bill_id)->first();
        // $user = Product::with('bills')->whereId($bill_id)->first();
        // $user= Bill::find($bill_id);

        // dd($user1,$user);
        // dd($user);
        return view ('/edit',['user'=>$user]);
        return response()->json($user);


    }
    public function remove($id,$bill_id=false){
        // dd($bill_id);
        Product::find($id)->delete();
        return redirect('/edit/'.$bill_id);
    }
    public function update(Request $request,$id){
        // dd($request->all());
        $request->validate([
            'billno'=>'required',
            'date'=>'required',
            'name'=>'required',
            'address'=>'required|max:50',
            'mobile'=>'required|max:10|min:10',
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

       if($data['product_id'][$row]){
        $product=Product::where('id',$data['product_id'][$row])->first();
        $product->update($data1);
       }else{
        Product::create($data1);
       }
     }
        return redirect('/customerlist');
        return response()->json($data1);

    }

}


