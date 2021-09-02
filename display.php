<!DOCTYPE html>
<?php
include 'connect.php';

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Movie</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add Movie</a></button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Genre</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>

  <?php
  
  $sql="Select * from `crudproj`";
  $result=mysqli_query($con, $sql);
  if($result){
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $title=$row['title'];
          $genre=$row['genre'];
          $status=$row['status'];

          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$title.'</td>
          <td>'.$genre.'</td>
          <td>'.$status.'</td>
          <td>
          <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
          <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
          </td>
        </tr>';
      }
  }
  
  ?>
  <tbody>
  </tbody>
</table>

</div>
</body>
</html>