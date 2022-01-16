<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visitors Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<?php
include 'header.php';
//include 'sidebar.php';
?>
<center><h3 class=" display-6">Visitors Details</h3></center>
<center>
<p class="lead">This is a list of visitors who have visited your apartment till today</p>

</center>
<div class="container-fluid">
<div class="row">
<div class="col">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Visitor Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Visitor Address</th>
      <th scope="col">apartment no</th>
      <th scope="col-4">Details</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include 'connect.php';
    $query="SELECT * FROM visitors";
    $result=mysqli_query($con,$query);
    while($res=mysqli_fetch_array($result))
    {
  ?>
    <tr>
      <td><?php echo $res['v_name'];?></td>
      <td><?php echo $res['mobile'];?></td>
      <td><?php echo $res['v_add'];?></td>
      <td><?php echo $res['a_no'];?></td>
      <td>Name of owner: <?php echo $res['whom'];?><br>
      Reason to meet: <?php echo $res['meeting']?><br>
      Date and Time: <?php echo $res['entertime'];?><br>
      Image path: <?php echo $res['imagePath'] ?>
      </td>
    </tr>
      <?php
    }
  ?>
  </tbody>
</table>
</div>
</div>
<?php
  include 'footer.php';
?>
</body>
</html>