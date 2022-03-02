<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Question List </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Question No. </th>
 <th>Question</th>
 <th> Option 1 </th>
 <th> Option 2 </th>
 <th> Option 3 </th>
 <th> Option 4 </th>
 <th> Answer </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'connection.php';
 $q="SELECT * FROM testpapers ORDER BY id DESC LIMIT 1;";
  $query = mysqli_query($conn,$q);
  $row = mysqli_fetch_row($query);
  $questionpaper=$row[1];
  $sql="SELECT * FROM $questionpaper";
 $query2 = mysqli_query($conn,$sql);

 while($res = mysqli_fetch_array($query2)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['question'];  ?> </td>
 <td> <?php echo $res['option1'];  ?> </td>
 <td> <?php echo $res['option2'];  ?> </td>
 <td> <?php echo $res['option3'];  ?> </td>
 <td> <?php echo $res['option4'];  ?> </td>
 <td> <?php echo $res['answer'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>
  <br><br>
<center><a href="host.php"><button class="btn-primary btn">Add more question</button></a></center><br><br>
 <center><button class="btn-primary btn" onclick="save()">Save</button></center>
 <script type="text/javascript">
 $(document).ready(function(){
 $('#tabledata').DataTable();
 })
 function save(){
  alert("Please log in once agian For security resean");
  window.open("../../adLogin.php","_self");
 }
 </script>


</body>
</html>