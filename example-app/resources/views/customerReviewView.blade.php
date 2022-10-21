@extends('layouts.customerNav')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Review</title>
    <style>
        *{
            box-sizing: border-box;
        }

        .menuDeleteBtn {
            color: white;
            background-color: #c9042c;
            border: none;
            padding: 15px 15px 15px 15px;
            border-radius: 15px;
            width: 150px;
            margin-right: -35%;
        }

        .menuEditBtn {
            color: white;
            background-color: #0445b5;
            border: none;
            padding: 15px 15px 15px 15px;
            border-radius: 15px;
            width: 150px;
        }

        .menuAddBtn {
            background-color: #f28713;
            color: white;
            border: none;
            padding: 15px 15px 15px 15px;
            border-radius: 15px;
            width: 150px;
            display: inline-block;
            margin-left: 15%;
            /* float: left; */

        }

        .menuEditBtn:hover {
            background-color: #145ede;
            cursor: pointer;
        }

        .menuDeleteBtn:hover {
            background-color: #c44d4d;
            cursor: pointer;
        }
   
        .menuAddBtn:hover {
            background-color: #e6ac0e;
            cursor: pointer;
        }

        .menuEditBtn:hover {
            background-color: #145ede;
            cursor: pointer;
        }

        .menuImg {
            display: block;
            float: light;
            border-radius: 50%;
            margin-left: 5%;
        }

        .menuText {
            text-align: left;
            margin-left: 25%;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px;
            width: 100%;
        }

        
      

        /* Float four columns side by side */
        .column {
            float: right;
            width: 85%;
            padding: 0 10px;
            margin-top: 30px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #F1CA8A;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
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

<body>
    <div class="container">
        <h3>View all image</h3>
        <hr>
        <div class="row">
        @foreach($imageData as $data)
            <div class="column">
                <div class="card">
                <img class="menuImg" src="{{ url('public/Image/'.$data->image) }}"style="height: 100px; width: 150px;">

                    <h2 class="menuText"> Customers Name:                                                       {{$data->customerName}}</h2>
                    <h3 class="menuText">complements/complaints:         {{$data->complaint}}</h3>

                    <button class="menuDeleteBtn fa fa-trash"><b> Delete</b></button>

                   
                </div>
            </div>
            @endforeach
        </div>

    </div>
    @endsection
</body>

</html>
