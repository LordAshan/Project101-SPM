<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<h2>SPM Assignment 2</h2>
<p>GROUP: SER 099</p>
<br>

<div class="row">
  <div class="column">
    <div  onclick="location='/adminDashboard'" class="card">

      <div class="container">
        <h3>RAVISHAN <br> S. A. A</h3>
        <p class="title">IT20241032</p>

        <p><button class="button">Leader</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
 
      <div class="container">
        <h3>EKANAYAKA <br> E. M. A. I. B </h3>
        <p class="title">IT20252786</p>

        <p><button class="button">Member</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">

      <div class="container">
        <h3>MANIMENDRA <br> N. H</h3>
        <p class="title">IT20253204</p>

        <p><button class="button">Member</button></p>
      </div>
    </div>
  </div>
  
  <div onclick="location='/adminDashboard'" class="column">
    <div class="card">

      <div class="container">
        <h3>Edirisinghe <br> B. M</h3>
        <p class="title">IT20252304</p>

        <p><button class="button">Member</button></p>
      </div>
    </div>
  </div>
  
</div>

</body>
</html>
