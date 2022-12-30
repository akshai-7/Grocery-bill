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
</head>
<style>
    body{
        font-family: 'Times New Roman', Times, serif
    }
    .container{
        margin-top: 20px;
        width: 90%;
        border: 1px solid lightgray;
        height: 100%;

    }
    .box{
        width: 80%;
        height: 100%;
        display: flex;
        margin-left: 10px;

    }
    .box1{
        margin-top: 10px;
        margin-left: 30px;
    }
    .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       background-color: gray;
       color: white;
       text-align: center;
    }
    </style>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
</header>
<section class="container">
    <form action="index.php" method="POST" autocomplete="off">
        <div class="box">
                <div class="col-md-5">
                    <h5 class="text-success">Bill Details</h5>
                    <div class="form-group">
                        <label for="">Bill No</label>
                        <input type="text" name="invoice_no" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="text" name="invoice_date" id="date" required class="form-control">
                    </div>
                </div>
                <div class="col-md-5">
                <h5 class="text-success">Customer Details</h5>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="cname" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="caddress" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" name="ccity" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile</label>
                        <input type="text" name="mobile" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="box1">
                <div class="col-md-10">
                <h5 class="text-primary">Product Details</h5>
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Tax</th>
                        <th>Tax.amount</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id='row'>
                    <tr>
                        <td><input type="text" required name="pname" class="form-control"></td>
                        <td><input type="text" required name="price" class="form-control price"></td>
                        <td><input type="text" required name="qty" class="form-control qty"></td>
                        <td><input type="text" required name="tax" class="form-control tax"></td>
                        <td><input type="text" required name="tax.amount" class="form-control tax.amount"></td>
                        <td><input type="text" required name="total" class="form-control total"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type="text" required name="pname" class="form-control"></td>
                        <td><input type="text" required name="price" class="form-control price"></td>
                        <td><input type="text" required name="qty" class="form-control qty"></td>
                        <td><input type="text" required name="tax" class="form-control tax"></td>
                        <td><input type="text" required name="tax.amount" class="form-control tax.amount"></td>
                        <td><input type="text" required name="total" class="form-control total"></td>
                        <td><input type="button" value="X" class="btn btn-danger btn-sm btn-row-remove"></td>
                    </tr>

                </tbody>
                <tfoot>
                  <tr class="new">
                    <td><input type="button" value="+Add Row" class=" btn btn-primary btn-sm" id=btn-add-row></td>
                    <td colspan="4"><a colspan="2"> Total</a></td>
                    <td><input type="text" name="grand_total" id="grand_total" class="form-control" required></td>
                    <td></td>
                  </tr>
                </tfoot>
                </table>
                <input type="submit" name="submit" value="Save Invoice" class="btn btn-success float-right">
                </div>
            </div>
   </form>
</div>
<script>
    $(document).ready(function(){
        $("#date").datepicker({
            dateFormat:"dd-mm-yy"
        });
// <--Add row-->
        $("#btn-add-row").click(function(){
        $("#row").append("<tr><td><input type='text' required name='pname' class='form-control'></td> <td><input type='text' required name='price' class='form-control price'></td><td><input type='text' required name='qty' class='form-control qty'></td><td><input type='text' required name='tax' class='form-control tax'></td><td><input type='text' required name='tax.amount' class='form-control tax.name'></td><td><input type='text' required name='total[]' class='form-control total'></td> <td><input type='button' value='X' class='btn btn-danger btn-sm btn-row-remove'></td></tr>");
        });

// <--Del row-->
        $('tbody').on('click','.btn-row-remove',function(){
        alert("Are You Sure?");
        $(this).closest( 'tr').remove();
        });



    });




</script>
</section>

<footer>
    <div class="footer">
        <p>Footer</p>
      </div>

</footer>
</body>
</html>
