<?php
            if(isset($_POST['Details'])){
                        $id=$_POST['id'];
                        header("location:details.php?id=$id");
            }
            if(isset($_POST['Delete'])){
                        include "connection.php";
                        $id=$_POST['id'];
                        $paper=$_POST['paper'];
                        $sql="DROP TABLE $paper;";
                        $query = mysqli_query($conn,$sql);
                        if($query==TRUE){
                                    $sql1="DELETE FROM testpapers WHERE id='$id';";
                                    $query1 = mysqli_query($conn,$sql1);
                        }
                        header("location:records.php");
            }
?>