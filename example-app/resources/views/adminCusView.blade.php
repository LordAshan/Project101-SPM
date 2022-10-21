
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Customer List</title>
    <style>

/*side menu*/

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

        .navcontainer {
            border-radius: 5px;
            background-color: #B85252;
            padding: 20px;
            margin-left: -2%;
            margin-top: -10%;
            width: 15%;
            height: 100%;
            position: fixed;
            display: block;
        }

        .navButton {
            width: 100%;
            background-color: #B85252;
            font-size: large;
            border: none;
            text-align: left;
        }

        .navButton:hover {
            color: white;
            transition: 0.3s;
        }

        .navButton:active {
            color: greenyellow;
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

        /* The side navigation menu */
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #B85252;
            position: fixed;
            height: 100%;
            overflow: auto;
            border-top-right-radius: 15px;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #F58840;
            color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #DEAC8A;
            color: white;
        }

        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }

        /* Style the buttons */
        .btn {
            border: none;
            outline: none;
            padding: 10px 16px;

            cursor: pointer;
            font-size: 18px;
        }

        /* Style the active class, and buttons on mouse-over */
        .active,
        .btn:hover {
            background-color: #666;
            color: white;
        }
   
  



/*my*/
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #b85252;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #f58840;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

/*Search*/

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  margin-bottom:25px;
  /*background-color: #e9e9e9;*/
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

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  margin-right: 20px;
  font-size: 17px;
}


.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: auto;
  background: #B85252;
  font-size: 17px;
  border: none;
  cursor: pointer;
  border-radius: 2px;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid black;  
  }
}
   
</style>
</head>

<body  style="background-color: #e9eade;">

<!-- The sidebar -->

<div class="sidebar" style="font-family: Arial Narrow;" ></br>
            <h2 style="font-size: 30px; text-align:center; color:white;"><u>Administrator</u></h2></br></br>
            <a href="/adminDashboard"  style="font-size: 25px;"><i class="fa fa-dashboard"></i><b> Dashboard</b></a>
            <a href="/adminMenuView" style="font-size: 25px;"><i class="fa fa-bars"></i><b> Menu</b></a>
            <a href="/adminorder" style="font-size: 25px;"><i class="fa fa-list"></i><b> Orders</b></a>
            <a href="#about" style="font-size: 25px;"><i class="fa fa-users"></i><b> Employees</b></a>
            <a href="/admincustomer" class="active" style="font-size: 25px;"><i class="fa fa-users"></i><b> Customers</b></a>
            <a href="#about" style="font-size: 25px;"><i class="fa fa-paperclip"></i><b> Feedback</b></a>
        </div>
    
    <!--<div class="sidebar">
    <h1>Administrator</h1>
    <a href="#dashboard">Dashboard</a>
    <a href="#menu">Menu</a>
    <a href="#employees">Employees</a>
    <a class="active" href="#customers">Customers</a>
    <a href="#feedback">Feedback</a>
    </div>-->


    <div class="container-fluid " style="padding-top: 50px">
        <h1 style="text-align: right; color:#796f6f; font-style:Sans-serif;"><b>CUSTOMERS</b></h1>
        <hr />
        <div class="container" >
       
        <a class="btn btn-success" href="{{url('/customer_pdf')}}">View PDF</a>
        <div class="topnav">
        <div class="topnav">
            <div class="search-container">
                <form method="GET" type="get" action="{{url('/customersearch')}}">
                {{csrf_field()}}

                <table style="border: none;">
                        <tbody>
                            <tr>
                                <td>
                                <input type="text" placeholder="Search by name and address..." name="searchcus">
                                </td>
                                <td>
                                <button type="submit"><i class="fa fa-search"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                   
                    
                </form>
            </div>
        </div>

        

        <table class="table table-light table-bordered">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                </tr>
              @endforeach
            </tbody>
        </table>


</div>

    </div>

</body>

</html>
