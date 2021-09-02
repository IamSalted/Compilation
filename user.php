<!DOCTYPE html>
<?php

include 'connect.php';
if(isset($_POST['submit'])){
  $title=$_POST['title'];
  $genre=$_POST['genre'];
  $status=$_POST['status'];

  $sql="insert into `crudproj` (title, genre, status) values('$title', '$genre', '$status')";
  $result=mysqli_query($con, $sql);

  if($result){
    header('location:display.php');

  }else{
    die(mysqli_error($con));
  }
}
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud Project</title>
  </head> 
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Movie</label>
    <input type="text" class="form-control" placeholder="Enter movie title" name="title" autocomplete="off"> 
  </div>
  <div class="form-group">
    <label>Genre</label>
    <input type="text" class="form-control" placeholder="Enter movie genre" name="genre" autocomplete="off"> 
  </div>
  <div class="form-group">
    <label>Status</label>
    <input type="text" class="form-control" placeholder="Current status" name="status" autocomplete="off"> 
  </div>
 
  <button type="submit" class="btn btn-primary my-2" name="submit">Submit</button>
</form>
    </div>

  </body>
</html>