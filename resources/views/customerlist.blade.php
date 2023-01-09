
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIlling</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg   bg-secondary">
            <div class="container-fluid">
              <a class="navbar-brand nav" href="">Grocery shop</a>
            </div>
            <div><a href="/" class="navbar-brand nav"><h5>LogOut</h5></a></div>
          </nav>
    </header>
  <section>
    <div class="d-flex justify-content-center align-items-center col-md-5 mt-5">
        <h3 class="text-primary">Customer Details</h3>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <table class="table table-striped table-bordered col-md-5 mt-3" style="width:1000px">
            <thead>
                <th style="text-align:center;">S.No</th>
                <th style="text-align:center;">Bill Number</th>
                <th style="text-align:center;">Date</th>
                <th style="text-align:center;">Name</th>
                <th style="text-align:center;">Address</th>
                <th style="text-align:center;">Mobile</th>
                <th style="text-align:center;">Grand Total</th>
                <th style="text-align:center;">Action</th>

            </thead>
            <tbody>
                 @foreach ($bills as $bills )
                <tr>
                <td style="text-align:center;">{{$loop->iteration}}</td>
                <td style="text-align:center;">{{$bills->bill_number}}</td>
                <td style="text-align:center;">{{$bills->date}}</td>
                <td style="text-align:center;">{{$bills->name}}</td>
                <td style="text-align:center;">{{$bills->address}}</td>
                <td style="text-align:center;">{{$bills->mobile}}</td>
                <td >{{$bills->grandtotal}}</td>

            <td style="text-align:center;">
                <a href="productlist/{{$bills->id}}"><i class="fa-solid fa-pen-to-square btn btn-primary" ></i></a>
             <a href="delete/{{$bills->id}}"><i class="fa-solid fa-trash btn btn-danger"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </section>
  <footer class="bg-secondary">
    <div class="footer bg-secondary">
        <p>Footer</p>
      </div>

</footer>
</body>

</html>

