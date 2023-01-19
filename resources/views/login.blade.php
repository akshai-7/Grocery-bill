<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<style>
    body{
        font-family: 'Times New Roman', Times, serif;
        height: 100vh;
        width: 100vw;
        background: lightgray;
    }
    .container{
        margin-top: 10%;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .row{
        border: 1px solid gray;
        width: 350px;
        height: 350px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        border-radius: 5px;
    }

    .box{
        margin-top: -40px;
        margin-left: 15px;

    }
    .input-container {
    /* display:flexbox; */
    display: flex;
    width: 90%;
    margin-bottom: 10px;
    }

    .icon {
    padding: 10px;
    text-align: center;
    }
    .nav{
    color: white;

}
.nav1{
    margin-right: 85%;
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
            <div class="container-fluid nav1">
              <a class="navbar-brand nav" href=""><i class="fa-solid fa-cart-shopping"> Grocery shop </i></a>
            </div>
          </nav>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 box">
                    <form role="form" action="/index" method="POST">
                        @csrf
                            <div class=" text-primary">
                                <h2> <i class="fa-solid fa-user"></i>  Login</h2>
                            </div><hr>
                            <div class="input-container">
                                <i class="fa fa-envelope icon bg-primary"></i>
                                <input class="input-field form-control" type="text" placeholder="Enter Email" name="email">
                            </div>
                            <div class="input-container ">
                                <i class="fa fa-key icon bg-primary"></i>
                                <input class="input-field form-control" type="password" placeholder="Password" name="password">
                            </div>
                            <hr>
                            <p align="left"><input type="submit" name="submit" value="Login" class="btn btn-primary"></p>



                    </form>
                </div>
            </div>
         </div>


    </section>
    <footer class="bg-secondary">
        <div class="footer bg-secondary">
            <p align="left"><a href="/" class="text-white">www.groceryshop.com</a></p>
        </div>
    </footer>
</body>
</html>
