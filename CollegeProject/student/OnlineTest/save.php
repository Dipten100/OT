<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
</head>
<body onload="load()">
            <form method="post">
                        <input type="hidden" id="result" name="result">
                        <input type="hidden" id="testname" name="testname">
                        <h1>Please Save You'r Answer </h1>
                        <input type="hidden" id="name" name="name">
                        <input type="submit" name="save" class="btn" value="Save"></input>
            </form>
            <script>
                        function load(){
                                    var params = new URLSearchParams(window.location.search),
                                    first = params.get("result"),
                                    second = params.get("test");
                                    document.getElementById("result").value=first;
                                    document.getElementById("testname").value=second;
                                    var name=prompt("Enter Login name");
                                    document.getElementById("name").value=name;
                        }
            </script>
            <?php
                        if(isset($_POST['save'])){
                                    include "connection.php";
                                    $stuname=$_POST['name'];
                                    $checkName=strtolower($stuname);
                                    $marks=$_POST['result'];
                                    $col=$_POST['testname'];
                                    $sql="SELECT * FROM result;";
                                    $q=mysqli_query($conn,$sql);
                                    while($res=mysqli_fetch_array($q)){
                                                $name=strtolower($res['stuName']);
                                                if($checkName==$name){
                                                            $sname=$res['stuName'];
                                                            $tag=1;
                                                            break;
                                                }else{
                                                            $tag=0;
                                                }
                                    }
                                    if($tag==1){
                                                $sql1="UPDATE result SET $col='$marks' WHERE stuName='$sname';";
                                                $q1=mysqli_query($conn,$sql1);
                                    }else{
                                                $sql1="INSERT INTO result (stuName,$col) VALUE ('$stuname','$marks');";
                                                $q1=mysqli_query($conn,$sql1);
                                    }
                                    header("location:/collegeProject/student/mytest.php");
                        }
            ?>
</body>
</html>