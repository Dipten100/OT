<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Wait</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
            <?php
                        include "connection.php";
                        $exam=$_GET['paper'];
                        date_default_timezone_set('Asia/Kolkata');
                        $runningTime = date('H:i:s');
                        $strRunTime=strtotime($runningTime);
                        $sql="SELECT * FROM testpapers WHERE testname='$exam';";
                        $q=mysqli_query($conn,$sql);
                        while($res=mysqli_fetch_array($q)){
                                    $time=$res['examDate'];
                                    $strTime=strtotime($time);
                                    echo "<div style='font-size:32px;font-weight:bolder;'>Wait some time exam will start in <span style='color:red'>$time</span></div><br>";
                                    echo "<div style='font-size:32px;font-weight:bolder;'>Now Time is <span style='color:red'>$runningTime</span></div><br>";
                                    echo "<div style='font-size:32px;font-weight:bolder;'>Exam Details</div><br>";
            ?>
                        <table>
                                    <tr>
                                                <th>Test Name</th>
                                                <th>Exam Time</th>
                                                <th>For Right Answer</th>
                                                <th>For Wrong Answer</th>
                                    </tr>
                                    <tr>
                                                <td> <?php echo $res['testname'];  ?> </td>
                                                <td> <?php echo $timeDuration=$res['examDuration'];  ?> </td>
                                                <td>+ <?php echo $right=$res['rightAnswer'];  ?> </td>
                                                <td>- <?php echo $wrong=$res['wrongAnswer'];  ?> </td>
                                    </tr>
                        </table>
            <?php 
                                    if ($strTime<=$strRunTime) {                                // there <=
                                                header("location:exam.php?exam=$exam& right=$right& wrong=$wrong& time=$timeDuration");
                                    }else{
                                                echo "<script type='text/javascript'>
                                                            alert('wait');
                                                </script>";
                                    }
                        }
            ?>
</body>
</html>