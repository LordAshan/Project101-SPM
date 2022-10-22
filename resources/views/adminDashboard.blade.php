@extends('layouts.adminNav')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Dashboard</title>

    <style>
        /* Float four columns side by side */
.column {
  float: right;
  width: 40%;
  padding: 0 10px;
  margin-top: 30px;
  cursor: pointer;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}


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
  background-color: #f1f1f1;
}

h3 {
    text-align: left;
}
h1 {
    text-align: right;
}
</style>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body style="background-color: #f1f1f1;">
    <div class="container">
        <h1 style="text-align: right; color:#1C3879; font-style:Sans-serif;"> DASHBOARD</h1>
        <hr />


<div class="row" style="margin-left:20%;">
  <div class="column">
    <div class="card">
      <h3>FOOD ITEM</h3>
      <br><i class='fas fa-chevron-right' style='font-size:48px;color:red'></i>
      <h1>15</h1>
    </div>
  </div>

  <div onclick="location='/#'" class="column">
    <div class="card">
      <h3>ORDERS</h3>
      <br><i class='fas fa-chevron-right' style='font-size:48px;color:red'></i>
      <h1>32</h1>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>CUSTOMERS</h3>
      <br><i class='fas fa-chevron-right' style='font-size:48px;color:red'></i>
      <h1>22</h1>
    </div>
  </div>
  
  <div onclick="location='/adminEmployeeList'" class="column">
    <div class="card">
      <h3>EMPLOYEES</h3>
      <br><i class='fas fa-chevron-right' style='font-size:48px;color:red'></i>
      <h1>12</h1>
    </div>
  </div>
</div>


    </div>


    </div>
    @endsection
</body>

</html>