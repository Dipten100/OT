<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Test</title>
            <link rel="stylesheet" href="OnlineTest.css">
</head>
<body>
            <!-- Info Box -->
            <div class="info_box">
                        <div class="info-title"><span>Some Rules of this Quiz</span></div>
                        <div class="info-list">
                                    <div class="info">
                                    1. You can select only one <span>Correct Answer</span>
                                    </div>
                                    <div class="info">
                                    2. Once You click OK  you can't be change your answer
                                    </div>
                                    <div class="info">
                                    3. You can't select any option once time goes off.
                                    </div>
                                    <div class="info">
                                    4. You can't exit from the Exam while you're playing.
                                    </div>
                                    <div class="info">
                                    5. You'll get points on the basis of your correct answers.
                                    </div>
                        </div>
            </div>
            <form method="post"><div class="start_btn"><button name="start">Start Exam</button></div></form>
            <?php
                        if(isset($_POST['start'])){
                                    include "connection.php";
                                    date_default_timezone_set('Asia/Kolkata');
                                    $today = date("Y/m/d H.i.s");
                                    $sql="SELECT * FROM testpapers WHERE examDate >= '$today' ORDER BY examDate LIMIT 1;";
                                    $q=mysqli_query($conn,$sql);
                                    if (mysqli_num_rows($q) > 0) {
                                                while($res=mysqli_fetch_assoc($q)){
                                                            $paper=$res['testname'];
                                                            header("location:waiting.php?paper=$paper");
                                                }
                                    }else{
                                                echo "<script type='text/javascript'>
                                                            alert(`You don't have exam today`);</script>";
                                    }
                        }
            ?>
</body>
</html>