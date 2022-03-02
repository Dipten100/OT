<?php

 include 'connection.php';

 if(isset($_POST['done'])){
  $q="SELECT * FROM testpapers ORDER BY id DESC LIMIT 1;";
  $query = mysqli_query($conn,$q);
  $row = mysqli_fetch_row($query);
  $questionpaper=$row[1];

 $id = $_GET['id'];
 $question = $_POST['question'];
 $option1 = $_POST['option1'];
 $option2 = $_POST['option2'];
 $option3 = $_POST['option3'];
 $option4 = $_POST['option4'];
 $answer = $_POST['answer'];
 $sql = " update $questionpaper set id=$id, question='$question', option1='$option1', option2='$option2', option3='$option3', option4='$option4', answer='$answer' where id=$id  ";

 $query = mysqli_query($conn,$sql);

 header('location:display.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Your Question </h1>
 </div><br>

 <label> Question: </label>
 <input type="text" name="question" class="form-control"> <br>

 <label> Option: </label>
 <input type="text" name="option1" class="form-control"> <br>
 <label> Option: </label>
 <input type="text" name="option2" class="form-control"> <br>
 <label> Option: </label>
 <input type="text" name="option3" class="form-control"> <br>
 <label> Option: </label>
 <input type="text" name="option4" class="form-control"> <br>
 <label> Answer: </label>
 <input type="text" name="answer" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>