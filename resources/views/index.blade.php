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
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="">
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
        width: 950px;
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
    </style>
<body>
<header>
    <nav class="navbar navbar-expand-lg   bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand nav" href="#">Grocery shop</a>
        </div>
        <div><a href="/" class="navbar-brand nav"><h5>LogOut</h5></a></div>
      </nav>
</header>
<section class="container">
    <form action=".php" method="POST" autocomplete="off">
        <div class="box ">
                <div class="col-md-5 ">
                    <h5 class="text-primary">Bill Details</h5>
                    <div class="form-group col-sm-5">
                        <label>Bill No</label>
                        <input type="text" name="invoice_no" required class="form-control">
                    </div>
                    <div class="form-group col-sm-5 ">
                        <label for="">Date</label>
                        <input type="text" name="invoice_date" id="date" required class="form-control">
                    </div>
                    <hr class="col-sm-7">
                           <h5 class="text-primary">Customer Details</h5>
                            <div class="form-group col-sm-8">
                                <label for="">Name</label>
                                <input type="text" name="cname" required class="form-control">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="">Address</label>
                                <input type="text" name="caddress" required class="form-control">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="">Mobile</label>
                                <input type="text" name="mobile" required class="form-control">
                            </div>
                </div>
            <div>
                <div class="box1">
                    <h5 class="text-primary">Product Details</h5>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-md-1" style="text-align:center;">S.no</th>
                            <th style="text-align:center;" class="col-md-3">Product</th>
                            <th style="text-align:center;" >Price</th>
                            <th style="text-align:center;">Qty</th>
                            <th style="text-align:center;">Sub Total</th>
                            <th style="text-align:center;">Tax(%)</th>
                            <th style="text-align:center;">Tax-amount</th>
                            <th style="text-align:center;">Total</th>
                            <th style="text-align:center;"><input type="button" value="+" class=" btn btn-primary " id=btn-add-row></th>
                        </tr>
                    </thead>
                    <tbody id='row'>

                        <tr>
                            <td><input type="text" required name="sno" class="form-control" style="text-align:center;" value="1"> </td>
                            <td ><input type="text" required name="pname" class="form-control" style="text-align:center;"></td>
                            <td><input type="text" required name="price" class="form-control price" style="text-align:center;"></td>
                            <td><input type="text" required name="qty" class="form-control qty" style="text-align:center;"></td>
                            <td><input type="text" required name="subtotal" class="form-control subtotal" style="text-align:center;"></td>
                            <td><input type="text" required name="tax" class="form-control tax" style="text-align:center;"></td>
                            <td><input type="text" required name="tax.amount" class="form-control taxamount" style="text-align:center;"></td>
                            <td><input type="text" required name="total" class="form-control total" style="text-align:center;"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="text" required name="sno" class="form-control" style="text-align:center;" value="2"></td>
                            <td><input type="text" required name="pname" class="form-control" style="text-align:center;"></td>
                            <td><input type="text" required name="price" class="form-control price" style="text-align:center;"></td>
                            <td><input type="text" required name="qty" class="form-control qty" style="text-align:center;"></td>
                            <td><input type="text" required name="subtotal" class="form-control subtotal" style="text-align:center;"></td>
                            <td><input type="text" required name="tax" class="form-control tax" style="text-align:center;"></td>
                            <td><input type="text" required name="tax.amount" class="form-control taxamount" style="text-align:center;"></td>
                            <td><input type="text" required name="total" class="form-control total" style="text-align:center;"></td>
                            <td><input type="button" value="X" class="btn btn-danger btn-sm btn-row-remove" style="text-align:center;"></td>
                        </tr>

                    </tbody>
                    <tfoot>
                    <tr class="new">
                        <td colspan="6"></td>
                        <td style="text-align:center;"><B>Grand Total</B></td>
                        <td><input type="text" name="grand_total" id="grand_total" class="form-control" required></td>
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
        $("#btn-add-row").click(function(){
        $("#row").append("<tr>  <td><input type='text' required name='sno' class='form-control' value='' style='text-align:center;'></td><td><input type='text' required name='pname' class='form-control' style='text-align:center;'></td> <td><input type='text' required name='price' class='form-control price' style='text-align:center;'></td><td><input type='text' required name='qty' class='form-control qty' style='text-align:center;'></td><td><input type='text' required name='subtotal' class='form-control subtotal' style='text-align:center;'></td><td><input type='text' required name='tax' class='form-control tax' style='text-align:center;'></td><td><input type='text' required name='taxamount' class='form-control taxamount' style='text-align:center;'></td> <td><input type='text' required name='total' class='form-control total' style='text-align:center;'></td><td><input type='button' value='X' class='btn btn-danger btn-sm btn-row-remove' style='text-align:center;'></td></tr>");
        });


// <--Del row-->
        $("tbody").on("click",".btn-row-remove",function(){
        alert("Are You Sure?");
        $(this).closest( 'tr').remove();
        grand_total()
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
            grand_total()
        });

        $("tbody").on("keyup",".tax",function(){
            var tax=Number($(this).val());
            var subtotal =Number($(this).closest("tr").find(".subtotal").val());
            $(this).closest("tr").find(".taxamount").val(subtotal*tax/100);
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

<footer class="bg-secondary">
    <div class="footer bg-secondary">
        <p>Footer</p>
      </div>

</footer>
</body>
</html>
