<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ADMIN</title>
            <link rel="stylesheet" href="profile.css">
</head>
<body>
            <?php
                        include "connection.php";
                        $admin=$_GET['name'];
            ?>
            <div class="header">Hii <?php echo $admin; ?></div>
            <table>
                        <tr>
                                    <th>USER NAME</th>
                                    <th>EMAIL ID</th>
                                    <th>MOBILE NO.</th>
                        </tr>
            
            <?php 
                        $sql="SELECT * FROM admn WHERE adname='$admin';";
                        $q=mysqli_query($conn,$sql);
                        if($q==TRUE){
                                    while($res=mysqli_fetch_array($q)){
            ?>
                                                <tr>
                                                            <td><?php echo $res['adname']; ?></td>
                                                            <td><?php echo $res['email']; ?></td>
                                                            <td><?php echo $res['mobile']; ?></td>
                                                </tr>
            <?php
                                    }
                        }
            ?>
            </table>
</body>
</html>