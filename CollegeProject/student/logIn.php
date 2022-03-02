
<?php
            if(isset($_POST['log'])) {
                        check();
            }
            function check(){
                        include("connection.php");
                        $email=$_POST['email'];
                        $pass=$_POST['password'];
                        $sql="SELECT * FROM registration WHERE emailId='$email' AND passwd='$pass'";
                        $result=mysqli_query($conn,$sql);
                        $check = mysqli_fetch_array($result);
                        if(isset($check)){
                                    echo "<script type='text/javascript'>
                                                alert('Log in Successfull');
                                                </script>"
                                                ;
                                                include("mytest.php");
                                                return true;
                        }else{
                                    echo "<script type='text/javascript'>
                                                alert('Please Check Go Back');
                                                history.back();
                                                </script>"
                                                ;
                                                return false;
                        }
            }
?>