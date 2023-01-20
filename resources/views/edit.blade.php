<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


</head>
<style>
    body{
        font-family: 'Times New Roman', Times, serif
    }
    .nav{
    color: white;
    }
    .container{
        margin-top: 40px;
        width: 100%;
        border: px solid lightgray;
        height: 630px;

    }
    .box{
        width: 50%;
        height: 100%;
        display: flex;
        margin-left: 10px;
        margin-top: 20px;
        font-size: 15px;

    }
    .box1{
        width: 1000px;
        margin-left: 0px;
        font-size: 17px;
    }

    .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       color: white;
       text-align: center;
    }
    .header{
        position: sticky;
        top: 0;
        background:gray;

    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand nav" href=""><i class="fa-solid fa-cart-shopping"> Grocery shop</i></a>
            </div>
            <div><a href="/" class="navbar-brand nav"><h5>LogOut <i class="fa-solid fa-arrow-right-from-bracket"></i></h5></a></div>
        </nav>
    </header>
    <section class="container">
        <form action="{{url('/update/'.$user->id)}}" method="POST" autocomplete="off">
            @csrf
            <div class="box ">
                    <div class="col-md-5 ">
                        <h5 class="text-primary mb-3"> <i class="fa-solid fa-money-bill"></i>Bill Details</h5>
                        <div class="form-group col-sm-5 mb-3">
                            <label class="mb-2">Bill No</label>
                            <input type="text" name="billno" required class="form-control" value="{{$user->bill_number}}">
                        </div>
                        <div class="form-group col-sm-5 mb-3">
                            <label class="mb-2"> <i class="fa-solid fa-calendar-days mb-2"></i>  Date</label>
                            <input type="text" name="date" id="date" required class="form-control" value="{{$user->date}}">
                        </div>
                            {{-- <hr class="col-sm-7"> --}}
                            <h5 class="text-primary mb-3 mt-4" > <i class="fa-solid fa-user mb-2"></i> Customer Details</h5>
                                <div class="form-group col-sm-8 mb-3">
                                    <label  class="mb-2"> <i class="fa-solid fa-user"></i>  Name</label>
                                    <input type="text" name="name" required class="form-control" value="{{$user->name}}">
                                </div>
                                <div class="form-group col-sm-8 mb-3">
                                    <label class="mb-2"> <i class="fa-solid fa-location-dot"></i>  Address</label>
                                    <input type="text" name="address" required class="form-control" value="{{$user->address}}">
                                </div>
                                <div class="form-group col-sm-8 mb-3">
                                    <label  class="mb-2"> <i class="fa-solid fa-phone mb-2"></i>  Mobile<label>
                                    <input type="text" name="mobile" required class="form-control" value="{{$user->mobile}}">
                                </div>
                    </div>
                <div>
                    <div class="box1">
                        <h5 class="text-primary"> <i class="fa-solid fa-basket-shopping"></i> Product Details</h5>
                        <table class="table table-bordered mt-4">
                            <thead class="header">
                                <tr>
                                    <th class="col-md-1" style="text-align:center;">S.no</th>
                                    <th class="col-md-1" style="text-align:center;">Product Id</th>
                                    <th style="text-align:center;" class="col-md-2">Product</th>
                                    <th style="text-align:center;" class="col-md-1">Price</th>
                                    <th style="text-align:center;" class="col-md-1">Qty</th>
                                    <th style="text-align:center;" class="col-md-2">Sub Total</th>
                                    <th style="text-align:center;" class="col-md-1">Tax(%)</th>
                                    <th style="text-align:center;" class="col-md-1">Tax amount</th>
                                    <th style="text-align:center;" class="col-md-2">Total</th>
                                    <th><input type="button" value="+" class=" btn btn-primary btn-sm" id=btn-add-row></th>
                                    {{-- <th></th> --}}
                                </tr>
                            </thead>
                            <tbody id='row' >
                                @foreach ($user->product as $user )
                                    <tr class="list">
                                        <td><input type="text" required name="sno[]" class="form-control" style="text-align:center;" value="{{$loop->iteration}}" id="sno"></td>
                                        <td><input type="" name="product_id[]" class="form-control" style="text-align:center;" value="{{$user->id}}" id="sno"></td>
                                        <td><input type="text" required name="productname[]" class="form-control productname" style="text-align:center;" id="productname" value="{{$user->productname}}"></td>
                                        <td><input type="text" required name="price[]" class="form-control price" style="text-align:center;"id="price" value="{{$user->price}}"></td>
                                        <td><input type="text" required name="qty[]" class="form-control qty" style="text-align:center;" id="qty" value="{{$user->qty}}"></td>
                                        <td><input type="text" required name="subtotal[]" class="form-control subtotal" style="text-align:center;" id="subtotal" value="{{$user->subtotal}}"></td>
                                        <td><input type="text" required name="tax[]" class="form-control tax" style="text-align:center;" id="tax" value="{{$user->tax}}"></td>
                                        <td><input type="text" required name="taxamount[]" class="form-control taxamount" style="text-align:center;" id="taxamount" value="{{$user->taxamount}}"></td>
                                        <td><input type="text" required name="total[]" class="form-control total" style="text-align:center;" id="total" value="{{$user->total}}"></td>
                                        {{-- <td><input type="button" value="X" class="btn btn-danger btn-sm btn-row-remove" style="text-align:center;" id="del" value=""></td> --}}
                                        <td><a href="/remove/{{$user->id}}/{{$user->bill_id}}" name="remove[]" value="X" class="btn btn-danger btn-sm btn-row-remove" style="text-align:center;" id="del" value="">X</a></td>
                                    </tr>
                                @endforeach
                                {{-- @dd($user->id); --}}
                            </tbody>
                            <tfoot>
                                <tr class="new">
                                    <td colspan="7"></td>
                                    <td style="text-align:center;"><B>Grand Total</B></td>
                                    <td><input type="text" name="grandtotal" id="grand_total" class="form-control" style="text-align:center;"  required></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                        <p align="right"><input type="submit" name="submit" value="Submit" class="btn btn-primary"></p>
                    </div>
                </div>
            </div>
        </form>

        <script>
                $(document).ready(function(){
                $("#date").datepicker({
                    dateFormat:"dd-mm-yy"
                });

        // <--Add row-->

                var i=$('#row tr:last').index()+1;
                $("#btn-add-row").on('click',function(){
                i++
                $("#row").append("<tr class='list'><td id='row_num "+i+"'><input type='text' required name='sno[]' class='form-control' value="+i+" style='text-align:center;'></td>'+'<td id='row_num "+i+"'><input type='text'  name='product_id[]' class='form-control' value="+0+" style='text-align:center;'></td>'+'<td><input type='text' required name='productname[]' class='form-control productname' style='text-align:center;'></td>'+' <td><input type='text' required name='price[]' class='form-control price' style='text-align:center;'></td>'+'<td><input type='text' required name='qty[]' class='form-control qty' style='text-align:center;'></td> '+' <td><input type='text' required name='subtotal[]' class='form-control subtotal' style='text-align:center;'></td>'+'<td><input type='text' required name='tax[]' class='form-control tax' style='text-align:center;'></td>'+'<td><input type='text' required name='taxamount[]' class='form-control taxamount' style='text-align:center;'></td> '+'<td><input type='text' required name='total[]' class='form-control total' style='text-align:center;'></td>'+' <td><a href='/remove/{{$user->id}}/{{$user->bill_id}}' class='btn btn-danger btn-sm btn-row-remove' name='remove[]' style='text-align:center;' id='del' >X</a></td></tr>");
        });

        // <--Del row-->
                $("tbody").on("click",".btn-row-remove",function(){
                alert("Are You Sure?");
                $(this).closest('tr').remove();
                grand_total()
                $('tbody tr').each(function(index) {
                //change hidden input value
                $(this).find("td:eq(0)").html((index + 1) +'<td><type="text" class="form-control" style="text-align:center;"  value=' + (index + 1) +' ></td>')
                });
                i--;
                });

        // <--subtotal-->
                $("tbody").on("keyup",".price",function(){
                    var price=Number($(this).val());
                    var qty =Number($(this).closest("tr").find(".qty").val());
                    $(this).closest("tr").find(".subtotal").val(price*qty);
                    grand_total()
                });

                $("tbody").on("keyup",".qty",function(){
                    var price =Number($(this).closest("tr").find(".price").val());
                    var qty=Number($(this).val());
                    $(this).closest("tr").find(".subtotal").val(price*qty);
                    grand_total()

                });

        // <--taxamount-->
                $("tbody").on("keyup",".subtotal",function(){
                    var subtotal=Number($(this).val());
                    var tax =Number($(this).closest("tr").find(".tax").val());
                    $(this).closest("tr").find(".taxamount").val(subtotal*tax/100);
                    var taxamount=Number($(this).closest("tr").find(".taxamount").val());
                    $(this).closest("tr").find(".total").val(subtotal+taxamount);
                    grand_total()
                });

                $("tbody").on("keyup",".tax",function(){
                    var tax=Number($(this).val());
                    var subtotal =Number($(this).closest("tr").find(".subtotal").val());
                    $(this).closest("tr").find(".taxamount").val(subtotal*tax/100);
                    var taxamount=Number($(this).closest("tr").find(".taxamount").val());
                    $(this).closest("tr").find(".total").val(subtotal+taxamount);
                    grand_total()
                });

        // <--total-->
                $("tbody").on("keyup",".subtotal",function(){
                    var subtotal=Number($(this).val());
                    var taxamount =Number($(this).closest("tr").find(".taxamount").val());
                    $(this).closest("tr").find(".total").val(subtotal+taxamount);
                    grand_total()
                });
                $("tbody").on("keyup",".taxamount",function(){
                    var taxamount=Number($(this).val());
                    var subtotal =Number($(this).closest("tr").find(".subtotal").val());
                    $(this).closest("tr").find(".total").val(subtotal+taxamount);
                    grand_total()
                });

        // <--grand_total-->
                function grand_total(){
                    var total=0;
                    $(".total").each(function(){
                        total += Number($(this).val());
                    });
                    $("#grand_total").val(total);
                }
                });
        </script>
    </section>
    <footer class="bg-secondary ">
        <div class="footer bg-secondary">
        <p align="left"><a href="" class="text-white">www.groceryshop.com</a></p>
        </div>
    </footer>
</body>
</html>
