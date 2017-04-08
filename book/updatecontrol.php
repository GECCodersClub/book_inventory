

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
  <?php
  $name=$_POST['name'];
  include(connect.php);
  $add="select * from book where Name='{$name}'";
$result=mysqli_query($conn,$add);
$row = mysqli_fetch_assoc($result)
echo"<div class='container-fluid text-center'>    
<form  role='form' action='update.php' method='POST' align='center'>
<h3><b><i>Book details</i></b></h3>
<br><br>
<label>*Book Name:</label>
<input type='text' value='".$row['Name']."' name='name' placeholder='Book Name ' required>
<br><br>
    <label>*Price:</label>
<input type='text' name='price' value='".$row['Name']."' Placeholder=' Price' required>
<br><br>
    <label>*Edition:</label>
<input type='text' name='edition' value='".$row['Name']."' Placeholder='Edition' required>
<br><br>
    <label>*DoP:</label>
<input type='text' name='dop' value='".$row['Name']."' Placeholder='Date of Publication' required>
<br><br>
    <label>*Author Name:</label>
<input type='text' name='author' value='".$row['Name']."' Placeholder='Author name' required>
<br><br>
    <label>*Publisher:</label>
<input type='text' name='publisher' value='".$row['Name']."' Placeholder='Publisher' required>
<br><br>
    <label>*Distributer:</label>
<input type='text' name='distributer' value='".$row['Name']."' Placeholder='Distributer' required>
<br><br>
    <label>*Language:</label>
<input type='text' name='language' value='".$row['Name']."' Placeholder='Language' required>
<br><br>
    <label>*Genre:</label>
<input type='text' name='genre' value='".$row['Name']."' Placeholder='Genre' required>
<br><br><br>
<input type='submit' value='Add Record'>
</form>
</center>";
?>
<footer class="container-fluid text-center">
  <p>Team #3 AWEsome</p>
</footer>

</body>
</html>