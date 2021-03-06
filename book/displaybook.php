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
        <li class="active"><a href="main.html">Home</a></li>
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
 <?php
include("connect.php");
echo"  <link rel='stylesheet' href='css/bootstrap.css'>";
$add="select * from book";
$result=mysqli_query($conn,$add);
echo"<table class='table table-striped'>";

echo"<tr class='warning'><td>Book ID</td>";
echo"<td>Name</td>";
echo"<td>Price</td>";
echo"<td>Edition</td>";
echo"<td>Date of publication</td></tr>";

while($row = mysqli_fetch_assoc($result))
{
echo"<tr class='success'><td>".$row['BookID']."</td>";
echo"<td>".$row['Name']."</td>";
echo"<td>".$row['Price']."</td>";
echo"<td>".$row['Edition']."</td>";
echo"<td>".$row['DoP']."</td></tr>";
}
echo"</table>";
?>

<footer class="container-fluid text-center">
  <p>Team #3 AWEsome</p>
</footer>

</body>
</html>