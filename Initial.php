<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con=mysqli_connect("localhost","root"," ");
    $qry="create database db_student";
    $result=mysqli_query($con,$qry);
    if($result)
    {
        echo"Database created";
    }
    else
    {
echo"error creating database";
    }
    mysqli_close($con);
    ?>
</body>
</html>
