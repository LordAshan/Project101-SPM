@extends('layouts.customerNav')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
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
        <h1 style="text-align: right; color:#1C3879; font-style:Sans-serif;">CUSTOMER REVIEW</h1>
        <hr /><br /><br />

        <div class="container" style="padding-top:10px; padding-bottom:10px; border-radius:15px; background-color: #EAE3D2; max-width:600px; display:block; margin-left:auto; margin-right: auto;">
        <form method="post" action="{{ route('image.store') }}" 
		enctype="multipart/form-data">
        {{csrf_field()}}
   

                <span class="close">&times;</span>


               
                <div class="row">
                    <div class="col-25">
                        <label for="customerName"><b> Customer Name</b></label>
                    </div>
                    <div class="col-75">
                        <input type="text" required id="customerName" name="customerName" placeholder="Enter name..  ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="complaint"><b>complements / complaints</b></label>
                    </div>
                    <div class="col-75">
                        <input type="text"  required id="complaint" name="complaint" placeholder="Enter complements/complaints">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="attachment"><b>Attachment</b></label>
                    </div>
                     <div class="row">
                     <input type="file" id="image" required name="image" class="form-control" >

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