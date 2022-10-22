@extends('layouts.adminNav2')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMP List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('public/assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .pagination {
            display: inline-flex;
            float: right;
            /* height: 50px;
            width: 100px; */
        }

        .employeeSearchBtn {
            border-radius: 10px;
            display: inline-block;
            height: 35px;
            background-color: #6f8ce8;
        }

        .empPrintBtn {
            background-color: #383434;
            color: white;
            border: none;
            padding: 15px 15px 15px 15px;
            border-radius: 15px;
            width: 150px;
            display: inline-block;
            margin-left: 15%;
            font-size: 16px;
            /* float: left; */
        }

        .empPrintBtn:hover {
            background-color: #545353;
            cursor: pointer;
        }



        .empAddBtn {
            background-color: #123123;
            color: white;
            border: none;
            padding: 15px 15px 15px 15px;
            border-radius: 15px;
            width: 150px;
            display: inline-block;
            margin-left: 1%;
            font-size: 16px;
            /* float: left; */
        }

        .empAddBtn:hover {
            background-color: #545353;
            cursor: pointer;
        }



        

        .topnav {
            overflow: hidden;
            /* background-color: black; */
        }

        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav .search-container {
            float: right;
            /* background-color: greenyellow; */
            /* display: inline; */
        }

        .topnav input[type=text] {
            padding: 6px;
            /* background-color: #abd4f5; */
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .topnav .search-container button {
            float: right;
            padding: 7px 11px;
            margin-top: 6px;
            margin-right: auto;
            background: #6f8ce8;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .search-container button:hover {
            background: #587be8;
        }

        @media screen and (max-width: 600px) {
            .topnav .search-container {
                float: none;
            }

            .topnav a,
            .topnav input[type=text],
            .topnav .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }

        /* .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px;
            width: 100%;
        } */

        .container1 {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            border-radius: 15px;
            border: 1px solid #BDBDBD;
            margin-left: 15%;
            margin-right: auto;
            margin-bottom: 30px;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #aba9a9;
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
    <div class="container1" style="background-color: #E9EADE; height:100%;">
        <h1 style="text-align: right; color:#1C3879; font-style:Sans-serif;">EMPLOYEE LIST</h1>

        <a href="{{ URL::to('/admin/pdf') }}"><button class="empPrintBtn"><i class="fa fa-print"></i> Print</button></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a><button onclick="location='/adminEmployeeAdd'" class="empAddBtn"><i class="fa fa-print"></i> Add </button></a>

        <hr /><br /><br />

        <div class="topnav">
            <div class="search-container row">
                <form method="GET" name="name" action="/search">
                    {{csrf_field()}}

                    <table style="border: none; margin-left:-10%;">
                        <tbody>
                            <tr>
                                <td>
                                    <input style="border-color:#68abf2;  border-style: solid;" type="text" name="name" class="form-control" placeholder="Search by name.." />
                                </td>
                                <td>
                                    <button value="Search" class="employeeSearchBtn fa fa-search"><b> Search</b></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

            </div> <br>
        </div>
        </form>
        <div>

        </div>

        <div style="overflow-x:auto;">
            <table style="max-width:75%;">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
                @foreach($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->empNumber}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->address}}</td>
                </tr>
                @endforeach

            </table>


        </div>



        
    </div>

    </div>


    @endsection
</body>

</html>