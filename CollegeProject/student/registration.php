<?php
            if(isset($_POST['Submit'])) {
                        submitted();
            }
            function submitted(){
                        include("stuconnection.php");
                        $name=$_POST['name'];
                        $phoneNO=$_POST['Phno'];
                        $email=$_POST['eid'];
                        $pass=$_POST['passwd'];
                        $sql = "INSERT INTO registration (stuName,phNo,emailId,passwd) VALUES('$name','$phoneNO',  
                        '$email', '$pass')";
                        mysqli_query($conn, $sql);
                        $sql2 = "INSERT INTO result (stuName) VALUES('$name');";
                        mysqli_query($conn,$sql2);
                        $sql1="SELECT stuId,stuName FROM registration WHERE phNo='$phoneNO'";
                        $result = $conn->query($sql1);
                        if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                                $msg="id: " . $row["stuId"]. " - Name: " . $row["stuName"]." Save It For Further Use";
                                    }
                        }
                        echo "<script type='text/javascript'>alert('$msg');
                                    history.back();
                                    </script>";
            }
?>