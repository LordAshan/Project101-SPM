<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            border-radius: 0px;
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
            background-color: #1C3879;
            position: fixed;
            height: 100%;
            overflow: auto;
            border-top-right-radius: 15px;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: #9eadde;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #607EAA;
            color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #296ED3;
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
        .btnActive {
            border: none;
            outline: none;
            padding: 10px 16px;

            cursor: pointer;
            font-size: 18px;
        }

        /* Style the active class, and buttons on mouse-over */
        .active,
        .btnActive:hover {
            background-color: #666;
            color: white;
        }


    </style>

</head>
<body style="font-family: Arial Narrow;">
     <!-- The sidebar -->
     <div id="myDIV" class="sidebar"></br>
            <h2 style="font-size: 30px; text-align:center; color:white;"><u>Employee</u></h2></br></br>
            <a href="/employeeMenuView" class="btnActive" style="font-size: 25px;"> <i class="fa fa-bars"></i><b> Menu</b></a>
            <a href="/employeeEmployeeList" class="btnActive active" style="font-size: 25px;"><i class="fa fa-users"></i><b> Employees</b></a>
        </div>


    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("btnActive");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>


</body>

@yield('content')
</html>