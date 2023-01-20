
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<style>
    body{
        font-family: 'Times New Roman', Times, serif
    }
    .nav{
    color: white;
    }
    .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       color: white;
       text-align: center;
    }
    .footer p{
        margin-right: 20px;
        margin-top: 20px;
        margin-bottom: 20px
    }
    .header{
        position: sticky;
        top: 0;
        background:gray;

    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg   bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand nav" href=""><i class="fa-solid fa-cart-shopping"> Grocery shop </i></a>
            </div>
            <div><a href="/" class="navbar-brand nav"><h5>LogOut<i class="fa-solid fa-arrow-right-from-bracket"></i></h5></a></div>
          </nav>
    </header>
    <section>
        <div class="d-flex justify-content-center align-items-center col-md-6 mt-5">
            <h3 class="text-primary"> <i class="fa-solid fa-basket-shopping"></i> Product Details</h3>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <table class="table table-striped table-bordered col-md-5 mt-3" style="width:900px">
                <thead class="header">
                    <th style="text-align:center;">S.No</th>
                    <th style="text-align:center;">Product Name </th>
                    <th style="text-align:center;">Price</th>
                    <th style="text-align:center;">Qty</th>
                    <th style="text-align:center;">Subtotal</th>
                    <th style="text-align:center;">Tax</th>
                    <th style="text-align:center;">Tax Amount</th>
                    <th style="text-align:center;">Total</th>
                </thead>
                <tbody>
                    @foreach ($users->product as $user )
                        <tr>
                            <td style="text-align:center;">{{$loop->iteration}}</td>
                            <td style="text-align:center;">{{$user->productname}}</td>
                            <td style="text-align:center;">{{$user->price}}</td>
                            <td style="text-align:center;">{{$user->qty}}</td>
                            <td style="text-align:center;">{{$user->subtotal}}</td>
                            <td style="text-align:center;">{{$user->tax}}</td>
                            <td style="text-align:center;">{{$user->taxamount}}</td>
                            <td style="text-align:center;">{{$user->total}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <footer class="bg-secondary ">
        <div class="footer mb-3 ">
            <p align="right"><a href="/print"><i class="fa-solid fa-print btn btn-primary"></i></a>
            <td style="text-align:center;"><a href="/edit/{{$user->bill_id}}"><i class="fa-solid fa-pen-to-square btn btn-success"></i></a></td>
            </p>
        </div>
    </footer>
</body>
</html>


