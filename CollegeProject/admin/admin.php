<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin page</title>
	<link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
  <?php
    include 'connection.php';
    $name=$_GET['name'];
  ?>

<div class="wrapper">
    <div class="sidebar">
        <h2>MyTest</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <?php echo "<li><a href='profile.php?name=$name'><i class='fas fa-user'></i>Profile</a></li>"; ?>
            <li><a href="host/test.php"><i class="fas fa-address-card"></i>Host</a></li>
            <li><a href="records.php"><i class="fa fa-file-text"></i>Records</a></li>
            <li><a href="contact.php"><i class="fas fa-address-book"></i>Contact</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Welcome!! <span id="adname"><?php echo $name; ?></span> </div>  
        <div class="info">
          
      </div>
    </div>
</div>

</body>
</html>