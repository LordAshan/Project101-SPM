@extends('layouts.employeeNav')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>employee add menu</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .custom-file-upload {
            background-color: #889ee3;
            display: block;
            float: center;
            padding-left: 40%;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .close {
            font-size: 45px;
            font-weight: 600;
            display: block;
            margin-left: 95%;
        }

        .close:hover {
            color: red;
            cursor: pointer;
        }


        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px;
            width: 50%;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body style="background-color: #F9F5EB;">
    <div class="container" style="height:100%">
        <h1 style="text-align: right; color:#1C3879; font-style:Sans-serif;">FOOD ITEM</h1>
        <hr /><br /><br />

        <div class="container" style="padding-top:10px; padding-bottom:10px; border-radius:15px; background-color: #EAE3D2; max-width:600px; display:block; margin-left:auto; margin-right: auto;">
            <form method="post" action="{{ route('image.store') }}" enctype="multipart/form-data">
                @csrf


                <span class="close" onclick="location='/employeeMenuView'">&times;</span>


                <div class="row">
                    <!-- <img src="{{ asset('images/dwnldLogo.png') }}" alt="description of myimage" class="center" style="max-height: 100px; max-width:100px; cursor:pointer;"> -->
                    <label class="custom-file-upload">
                        <input type="file" class="form-control" required name="image">
                    </label>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="foodName"><b>Name</b></label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="foodName" name="foodName" placeholder="Enter name.." required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="ingredients"><b>Ingredients</b></label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="ingredients" name="ingredients" placeholder="Enter special ingredients.." required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="foodPrice"><b>Price (LKR.)</b></label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="price" name="price" placeholder="Enter price.." onkeypress="return isNumber(event)" required="">
                    </div>
                </div>

                <div class="row">
                    <input type="submit" style="margin-top: 15px;" value="Save">
                </div>
            </form>
        </div>
    </div>
    @endsection

    <script>
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
    </script>
</body>

</html>