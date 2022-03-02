<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname="mytest";
            $conn1 = new mysqli($servername, $username, $password);
            $q="CREATE DATABASE mytest";
            $query=mysqli_query($conn1,$q);
            if($query==TRUE){
                        $conn = new mysqli($servername, $username, $password,$dbname);
                        if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                        }
            }else{
                        $conn = new mysqli($servername, $username, $password,$dbname);
                        if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                        }
            }

?>