<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="exam.css">
</head>
<body>
            <div id="body">
                        <div class="count"><span id="H">00</span>:<span id="M">00</span>:<span id="S">00</span></div>
            <script>
                        <?php
                                    $exam=$_GET['exam'];
                                    $right=$_GET['right'];
                                    $wrong=$_GET['wrong'];
                                    $timeDuration=$_GET['time'];
                                    echo "var test='$exam';";
                                    echo "var right='$right';";
                                    echo "var wrong='$wrong';";
                                    echo "var time='$timeDuration';";
                        ?>
                        var rightAnswer=parseFloat(right);
                        var wrongAnswer=parseFloat(wrong);
                        var timeDur=time;
                        var exam=test;
                        var [hours, minutes, seconds] = timeDur.split(':');
                        var totalSeconds = (+hours) * 60 * 60 + (+minutes) * 60 + (+seconds);
                        counting();
                        function counting(){
                                    totalSeconds-=1;
                                    if(totalSeconds>=0){
                                                var h=parseInt(totalSeconds/3600);
                                                var m=parseInt(totalSeconds/60);
                                                var s=parseInt(totalSeconds%60);
                                                document.getElementById("H").innerHTML=h;
                                                document.getElementById("M").innerHTML=m;
                                                document.getElementById("S").innerHTML=s;
                                                setTimeout(counting,1000);
                                    }else{
                                                submit();
                                    }
                        }
                        var wright={};
                        var checkAnswer={};
            </script>
            <?php
                        include "connection.php";
                        $qno=1;
                        $exam=$_GET['exam'];
                        $sql="SELECT * FROM $exam;";
                        $q=mysqli_query($conn,$sql);
                        while($res=mysqli_fetch_array($q)){
            ?>
                                    <form method="post">
                                                            <?php 
                                                                        $id=$qno;
                                                                        $ans=$res['answer'];
                                                            ?>
                                                            <script>
                                                                        <?php
                                                                                    echo "var id='$id';";
                                                                                    echo "var answ='$ans';";
                                                                        ?>
                                                                        wright[id]=answ;
                                                            </script>
                                                            <?php echo $qno; ?><label>Question</label><br>
                                                            <?php echo $res['question']; ?><br>
                                                            <label>Options</label><br>
                                                            <div>
                                                                        <input type='radio' name='<?php echo $qno; ?>' value='<?php echo $res['option1'] ?>'><?php echo $res['option1'] ?>
                                                                        <input type='radio' name='<?php echo $qno; ?>' value='<?php echo $res['option2'] ?>'><?php echo $res['option2'] ?>
                                                                        <input type='radio' name='<?php echo $qno; ?>' value='<?php echo $res['option3'] ?>'><?php echo $res['option3'] ?>
                                                                        <input type='radio' name='<?php echo $qno; ?>' value='<?php echo $res['option4'] ?>'><?php echo $res['option4'] ?>
                                                            </div>
                                                </form>
            <?php
                                    $qno++;
                        }
            ?>
            <input type="submit" value="Submit" onclick="submit()">
            <input type="hidden" id="testname" value="">
            </div>
            <script>
                        var result=0.00;
                        function submit(){
                                    var answer=document.getElementsByTagName('input');
                                    for(i = 0; i < answer.length; i++) {
                                                if(answer[i].type="radio") {
                                                            if(answer[i].checked){
                                                                        qid=answer[i].name;
                                                                        ans=answer[i].value;
                                                                        checkAnswer[qid]=ans;
                                                            }
                                                }
                                    }
                                    for(var anskey in checkAnswer) {
                                                for(var key in wright) {
                                                            if(anskey==key){
                                                                        if(wright[key]==checkAnswer[key]){
                                                                                    result+=rightAnswer;
                                                                        }else{
                                                                                    result-=wrongAnswer;
                                                                        }
                                                            }
                                                }
                                    }
                                    var params = new URLSearchParams();
                                    params.append("result", result);
                                    params.append("test", exam);
                                    var url = "save.php?" + params.toString();
                                    window.location.href = url;
                        }
            </script>
</body>
</html>