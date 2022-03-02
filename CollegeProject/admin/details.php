
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

 </tr >

 <?php
 include 'connection.php';
 $id=$_GET['id'];
 $q="SELECT testname FROM testpapers WHERE id='$id';";
 $query = mysqli_query($conn,$q);
 $res = mysqli_fetch_array($query);
 $paper=$res['testname'];
  $sql="SELECT * FROM $paper";
 $query = mysqli_query($conn,$sql);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['question'];  ?> </td>
 <td> <?php echo $res['option1'];  ?> </td>
 <td> <?php echo $res['option2'];  ?> </td>
 <td> <?php echo $res['option3'];  ?> </td>
 <td> <?php echo $res['option4'];  ?> </td>
 <td> <?php echo $res['answer'];  ?> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>
</body>
</html>