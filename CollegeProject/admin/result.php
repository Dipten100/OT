<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Result</title>
</head>
<style>
            .table{
                        font-size: 28px;
                        font-family: Arial, Helvetica, sans-serif;
                        width: 100%;
            }
            .text-center{
                        text-align: center;
                        font-size: 24px;
            }
            .head{
                        padding-top: 12px;
                        padding-bottom: 12px;
                        text-align: left;
                        background-color: #04AA6D;
                        color: white;
            }
            td, th {
                        border: 1px solid #ddd;
                        padding: 8px;
            }
</style>
<body>
            <p class="text-center" style="background-color: #04AA6D; color:white; font-size: 32px;">Result</p>
            <table class="table">
            <?php
                        include "connection.php";
                        $paper=$_GET['paper'];
                        echo "<tr class='head'>
                                    <th>Student Name</th>
                                    <th>$paper</th>
                        </tr>";
                        $sql="SELECT * FROM result;";
                        $q=mysqli_query($conn,$sql);
                        while($res=mysqli_fetch_array($q)){
            ?>
                                    <tr class="text-center">
                                                <td> <?php echo $res['stuName'];  ?> </td>
                                                <td> <?php echo $res[$paper];  ?> </td>
                                    </tr>
            <?php                        
                        }
            ?>
            </table>
</body>
</html>