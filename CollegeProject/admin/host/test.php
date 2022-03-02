<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>create</title>
</head>
<style>
            p{
                        text-align: center;
                        font-size: 48px;
                        color: black;
                        font-weight: 600;
                        padding-top: 2%;
            }
            div{
                        padding-top: 2%;
                        padding-left: 40%;
                        font-size: 32px;
                        background-color: greenyellow;
                        position: relative;
                        display: flexbox;
            }
            label{
                        font-size: 32px;
                        font-weight: 700;
                        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            input{
                        font-size: 28px;
            }
            button{
                        font-size: 24px;
                        background-color: green;
                        color: whitesmoke;
            }
</style>
<body>
            <p>Test Details</p>
            <div>
                        <form method="POST">
                                    <label>Enter test paper name</label><br>
                                    <input type="text" name="test"><br><br>
                                    <label>Enter Exam Date</label><br><br>
                                    <input type="date" name="date"><br><br><br>
                                    <label>Enter Exam Time </label><br><br>
                                    <input type="time" name="etime"><br><br><br>
                                    <label>Enter Exam Time Duration &nbsp;<span style="color:red"> *Please click AM</span> </label><br><br>
                                    <input type="time" name="time"><br><br><br>
                                    <label>Enter Right Answer Marks </label><br><br>
                                    <input type="float" name="right"><br><br><br>
                                    <label>Enter Wrong Answer Marks </label><br><br>
                                    <input type="float" name="wrong"><br><br><br>
                                    <label>Test Expire Time </label><br><br>
                                    <input type="time" name="expire"><br><br><br>
                                    <button type="submit" name="create" value="Create">Create</button>
                        </form>
            </div>
</body>
<?php
            if(isset($_POST['create'])){
                        include 'connection.php';
                        $tablename=$_POST['test'];
                        $examDate=$_POST['date'];
                        $examtime=$_POST['etime'];
                        $examTimeDuration=$_POST['time'];
                        $right=$_POST['right'];
                        $wrong=$_POST['wrong'];
                        $expire=$_POST['expire'];
                        $examDateAndTime=date("Y/m/d H.i.s",strtotime($examDate." ".$examtime));
                        $sql="CREATE TABLE testpapers(
                                    id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                    testname VARCHAR(255),
                                    examDate DATETIME,
                                    examDuration TIME,
                                    rightAnswer Float,
                                    wrongAnswer Float,
                                    expireTime TIME
                        );";
                        if ($conn->query($sql) === TRUE) {
                                    $sql2="ALTER TABLE result ADD $tablename INT;";
                                    if($conn->query($sql2)!=TRUE){
                                                echo "no";
                                    }
                                    $sql1="CREATE TABLE $tablename(
                                                id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                                question VARCHAR(255),
                                                option1 VARCHAR(255),
                                                option2 VARCHAR(255),
                                                option3 VARCHAR(255),
                                                option4 VARCHAR(255),
                                                answer VARCHAR(255)
                                    );";
                                    if($conn->query($sql1)==TRUE){
                                                $q="INSERT INTO testpapers (testname,examDate,examDuration,rightAnswer,wrongAnswer,expireTime) VALUES ('$tablename','$examDateAndTime', '$examTimeDuration','$right','$wrong','$expire');";
                                                $query = mysqli_query($conn,$q);
                                                header("location:host.php");
                                    }else{
                                                echo "Error creating table: " . $conn->error;
                                                echo "Please change the table name";
                                    }
                        } else {
                                    $sql2="ALTER TABLE result ADD $tablename INT;";
                                    if($conn->query($sql2)!=TRUE){
                                                echo "no";
                                    }
                                    $sql1="CREATE TABLE $tablename(
                                                id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                                question VARCHAR(255),
                                                option1 VARCHAR(255),
                                                option2 VARCHAR(255),
                                                option3 VARCHAR(255),
                                                option4 VARCHAR(255),
                                                answer VARCHAR(255)
                                    );";
                                    if($conn->query($sql1)==TRUE){
                                                $q="INSERT INTO testpapers (testname,examDate,examDuration,rightAnswer,wrongAnswer,expireTime) VALUES ('$tablename','$examDateAndTime', '$examTimeDuration','$right','$wrong','$expire');";
                                                $query = mysqli_query($conn,$q);
                                                header("location:host.php");
                                    }else{
                                                echo "Error creating table: " . $conn->error;
                                                echo "Please change the table name";
                                    }
                        }
            }
            ?>
</html>