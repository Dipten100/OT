<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contact</title>
</head>
<style>
            .table{
                        font-size: 28px;
                        padding-left: 30%;
                        padding-top: 7%;
                        font-family: Arial, Helvetica, sans-serif;
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
            <p class="text-center" style="background-color: #04AA6D; color:white; font-size: 32px;">Contact List</p>
            <table class="table">
                        <tr class="head">
                                    <th>Student Name</th>
                                    <th>Phone Number</th>
                                    <th>Email Id</th>
                        </tr>
                        <?php
                                    include 'stuconnection.php';
                                    $sql="SELECT * FROM registration";
                                    $query2 = mysqli_query($conn,$sql);
                                    while($res = mysqli_fetch_array($query2)){
                        ?>
                                    <tr class="text-center">
                                                <td> <?php echo $res['stuName'];  ?> </td>
                                                <td> <?php echo $res['phNo'];  ?> </td>
                                                <td> <?php echo $res['emailId'];  ?> </td>
                                    </tr>
                                    <?php 
                                    }
                                    ?>
            </table>
</body>
</html>