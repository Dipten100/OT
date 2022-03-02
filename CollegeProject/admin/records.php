<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>record</title>
            <link rel="stylesheet" href="records.css">
</head>
<body>
            <div class="header"><h1>History</h1></div>
            <div id="content">
                        <?php
                                    include 'connection.php';
                                    $sql="SELECT * FROM testpapers ORDER BY examDate DESC;";
                                    date_default_timezone_set('Asia/Kolkata');
                                    $query2 = mysqli_query($conn,$sql);
                                    while($res = mysqli_fetch_array($query2)){
                        ?>
                                    <form action="check.php" method="post">
                                                <div class="content-block">
                                                            <div class="content-header">
                                                                        <span id="datetime"><?php echo $res['examDate'];  ?></span>
                                                            </div>
                                                            <div class="mid">
                                                                        <p class="content-middle">
                                                                                    <?php echo $test=$res['testname'];  ?>
                                                                        </p>
                                                                        <span style="padding-left:80%">
                                                                                    <?php 
                                                                                                $now=strtotime(date("H.i.s",strtotime("now")));
                                                                                                $et=$res['examDate'];
                                                                                                $ext=strtotime(date("H.i.s",strtotime($et)));
                                                                                                if($ext>$now){
                                                                                                            echo "<span style='background-color: red;color:aliceblue;font-size:24px;padding:0 1%;'>Panding</span>";
                                                                                                }else{
                                                                                                            $expt=$res['expireTime'];
                                                                                                            $expiret=strtotime(date("H.i.s",strtotime($expt)));
                                                                                                            if($expiret>=$now){
                                                                                                                        echo "<span style='background-color: red;color:aliceblue;font-size:24px;padding:0 1%;'>Exam Going On</span>";
                                                                                                            }else{
                                                                                                                        echo "<span style='background-color: red;color:aliceblue;font-size:24px;padding:0 1%;'>Exam Over</span>&nbsp; &nbsp;&nbsp;";
                                                                                                                        echo "<span style='font-weight:900;background-color:#bce3f3;color:black'><a href='result.php?paper=$test'>RESULT</a></span>";
                                                                                                            }
                                                                                                }
                                                                                    ?>
                                                                        </span>
                                                            </div>
                                                            <br>
                                                            <input type="hidden" name="paper" value="<?php echo $res['testname'];?>">
                                                            <input type="hidden" name="id" value="<?php echo $res['id'];?>">
                                                            <div>
                                                                        <input type="submit" name="Details" value="Details"></input>
                                                                        <input type="submit" name="Delete" value="Delete"></input>
                                                            </div>
                                                </div>
                                    </form>
                                    <br><br>
                        <?php
                                    }
                        ?>
            </div>
</body>
</html>