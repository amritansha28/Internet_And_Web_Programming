<?php
$insert = false;
if(isset($_POST['sno'])){
    $conn = mysqli_connect("localhost", "root", "", "da2");
    if($conn-> connect_error) {
        die("connection failed:".$conn->connect_error);
    }
    $sno = $_POST['sno'];
    $names = $_POST['names'];
    $query = "UPDATE inserts SET `sno` = '$sno' where names='$names'";
    $result = mysqli_query($conn,$query);
    if($conn->query($query) == true){
        echo "<I><B>Successfully updated...</B></I>";
    }
    else{
        echo "ERROR: $query <br> $conn->error";
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS/faculty/faculty3/update</title>
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
    <h1>UPDATE MARKS</h1>
    <form align="center" action="update.php" method="POST">
        <input type="text" name="names" id="names" placeholder="Student's Name"><br>
        <input type="number" name="sno" id="sno" placeholder="Updated Student's Score"><br>
        <input type="submit" value="Update">
    </form>
    </div>
</body>
</html>