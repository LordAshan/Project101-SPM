<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Create Account</title>

   

    <style>
        body::after {
        content: "";
        background: url('images/createaccount.png');
        opacity: 0.8;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        position: absolute;
        background-size:cover;
        z-index: -1;
    }
    
    </style>
   
</head>

<body>
    <div class="container mt-3" style="padding-top: 50px">
        <h1 style="text-align: right;  font-size:100px; margin-right:20px; color:black; font-style:Sans-serif;">PUZZLE</h1>
        </br>
        <div  >
        <div class="container" style="width:660px; margin-left:60%; padding-top:10px; padding-bottom:10px;border-radius:5px; background-color: #EAE3D2;">
        
        @foreach($errors->all() as $error)

        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
        
        @endforeach

        <form method="post" action="/saveUser">
        {{csrf_field()}}

    <p style="text-align: center;">Please sign up to continue...</p>

                <div class="form-group row mt-3">
                    <div class="col-sm-5" style="width:660px">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                </div>

               
                

                <div class="form-group row mt-3">
                    <div class="col-sm-5" style="width:660px">
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile Number" required>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <div class="col-sm-5" style="width:660px">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <div class="col-sm-5" style="width:660px">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <div class="col-sm-5" style="width:660px">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>

                

                <button class="btn btn-success mt-3 mb-2" style="width: 100%" type="submit">Sign Up</button>

                
            </form>

        </div>
</div>

    </div>

</body>

</html>