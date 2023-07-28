<?php
$insert = false;
if(isset($_POST['sno'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $sno = $_POST['sno'];
    $names = $_POST['names'];

    $sql = "INSERT INTO `da2`.`inserts` (`sno`, `names`, `date`) VALUES ('$sno', '$names', current_timestamp());";
    if($con->query($sql) == true){
        echo "<I><B>Successfully inserted...</B></I>";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS/faculty/faculty3/insert</title>
    <style>
        h1{
            text-align: center;
        }
        input[type="submit"]{
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
        }
        input[type="text"],[type="number"]{
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            width: 200px;
        }
        div{
            padding-top: 250px;
        }
        input[type="submit"]{
            background-color: rgb(17, 0, 255);
            color: white;
        }
        input[type="submit"]:hover{
            background-color: rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <div>
    <h1>INSERT MARKS</h1>
    <form align="center" action="insert.php" method="POST">
        <input type="text" name="names" id="names" placeholder="Student's Name"><br>
        <input type="number" name="sno" id="sno" placeholder="Student's Score"><br>
        <input type="submit" value="Insert">
    </form>
    </div>
</body>
</html>