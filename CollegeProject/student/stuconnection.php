<?php
            include 'connection.php';
            $q="CREATE TABLE registration(
                        stuId INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        stuName VARCHAR(255),
                        phNo INT(20),
                        emailId VARCHAR(255),
                        passwd VARCHAR(255)
            );";
            $qer=mysqli_query($conn,$q);
            if($qer==FALSE){
                        echo "";
            }
?>