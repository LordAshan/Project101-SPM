@extends('layouts.employeeNav')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Employee view menu</title>
    <style>
        * {
            box-sizing: border-box;
        }

        a{
            text-decoration: none;
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
            float: left;
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
            width: 65%;
            padding: 0 10px;
            margin-top: 30px;
            margin-right: 10%;
            border-radius: 15px;
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
            background-color: #dae0f5;
            border-radius: 15px;
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

<body style="background-color: #F9F5EB;">
    <div class="container">
        <h1 style="text-align: right; color:#1C3879; font-style:Sans-serif;">FOOD ITEMS</h1>
        <button class="menuAddBtn" onclick="location='/empAddMenu'"><b>Add New Item</b></button>
        <hr /><br /><br />
        <div class="row">
            @foreach($imageData as $data)
            <div class="column">
                <div class="card">
                    <img class="menuImg" src="{{ url('public/Image/'.$data->image) }}" style="height: 150px; width: 150px;">
                    <h3 class="menuText">Item Name: {{$data->foodName}}</h3>
                    <h3 class="menuText">Special Ingredients: {{$data->ingredients}}</h3>
                    <h3 class="menuText">Price (LKR.) : {{$data->price}} </h3>
                    <button class="menuEditBtn fa fa-edit"><b> Edit</b></button>
                    <a href = "/deleteMenu/{{$data->id}}" class = "menuDeleteBtn fa fa-trash"> <b> Delete</b> </a>
                    <!-- <button class="menuDeleteBtn fa fa-trash"><b> Delete</b></button> -->
                </div>
            </div>
            @endforeach
        </div>

    </div>
    @endsection
</body>

</html>