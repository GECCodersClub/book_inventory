<?php
include("connect.php");

$name = $_POST['name'];
$price=$_POST['price'];
$edition=$_POST['edition'];
$dop=$_POST['dop'];
$language=$_POST['language'];
$genre=$_POST['genre'];
$publisher=$_POST['publisher'];
$distributer=$_POST['distributer'];
$author=$_POST['author'];



$add1="insert into book(name,price,edition,dop) values ('{$name}','{$price}','{$edition}','{$dop}')";
$add2="insert into author(Name) values ('{$author}')";
$add3="insert into language(Lang) values ('{$language}')";
$add4="insert into genre(GenreType) values ('{$genre}')";
$add5="insert into publisher(Name) values ('{$publisher}')";
$add6="insert into distributor(Name) values ('{$distributer}')";

$sql="select * from author where Name=".$author;
$abc=mysqli_query($conn,$sql);
if($abc)
{
	$result2=mysqli_query($conn,$add2);
}

$result1=mysqli_query($conn,$add1);
$result3=mysqli_query($conn,$add3);
$result4=mysqli_query($conn,$add4);
$result5=mysqli_query($conn,$add5);
$result6=mysqli_query($conn,$add6);

 if(!$result2)
  {
   }
   else
    // echo " Successfully added!";
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Inventory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Book Inventory</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="basic.html">Add a New Book</a></li>
        <li><a href="displaybook.php">Display All</a></li>
        <li><a href="search.php">Search</a></li>
						<li><a href="delete.php">Delete</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Added successfully</h1>
      <hr>
      <p></p>
    </div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Team #3 AWEsome</p>

</footer>

</body>
</html>