@extends('layouts.adminNav2')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EMP</title>
    <style>
        * {
            box-sizing: border-box;
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
    <div class="container">
        <h1 style="text-align: right; color:#1C3879; font-style:Sans-serif;">REGISTER EMPLOYEE</h1>
        <hr /><br/><br/>

        <div class="container" style="padding-top:10px; padding-bottom:10px; border-radius:15px; background-color: #EAE3D2; max-width:600px; display:block; margin-left:auto; margin-right: auto;">
        <form method = "post" action = "/addEmp">
    {{csrf_field()}}
                 <span class="close" onclick="location='/adminEmployeeList'">&times;</span>


                <div class="row">
                    <img src="{{ asset('images/dwnldLogo.png') }}" alt="description of myimage" class="center" style="max-height: 100px; max-width:100px; cursor:pointer;">
                </div>
                
             

                <div class="row">
                    <div class="col-25">
                        <label for="name"><b>Name</b></label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="name" placeholder="Employee Name..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="empNumber"><b>Mobile Number</b></label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="empNumber" name="empNumber" placeholder="Employee Mobile Number..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="email"><b>Email</b></label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="email" name="email" placeholder="Employee Email..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="address"><b>Address</b></label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="address" name="address" placeholder="Employee Address..">
                    </div>
                </div>

                <div class="row">
                    <input type="submit" style="margin-top: 15px;" value="Save">
                </div>
            </form>
        </div>
    </div>
    @endsection
</body>

</html>