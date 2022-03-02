<?php
            include "connection.php";
            $email=$_POST['adEmail'];
            $pass=$_POST['adPass'];
            $sql="SELECT * FROM admn WHERE email='$email';";
            $q=mysqli_query($conn,$sql);
            if($q->num_rows>0){
                        while($res=mysqli_fetch_array($q)){
                                    if($pass==$res['pass']){
                                                $name=$res['adname'];
                                                $tag=1;
                                                break;
                                    }else{
                                                $tag=0;
                                    }
                        }
                        if($tag==1){
                                    header("location:admin/admin.php?name=$name");
                        }else{
                                    echo "<script type='text/javascript'>
                                    alert(`please check Email or Password`);
                                    history.back();
                                    </script>";
                        }
            }else{
                        echo "<script type='text/javascript'>
                        alert(`We don't have any records please register first`);
                        history.back();
                        </script>";
            }
?>