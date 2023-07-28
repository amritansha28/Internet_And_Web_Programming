<?php
$insert = false;
if(isset($_POST['submit'])){
    $conn = mysqli_connect("localhost", "root", "", "da2");
    if($conn-> connect_error) {
        die("connection failed:".$conn->connect_error);
    }
    $query = "SELECT * FROM inserts ORDER BY sno DESC;";
    $result = mysqli_query($conn,$query);
    if($conn->query($query) == true){
        echo "<I><B>Marks in sorted order...</B></I></br><B>Topper </B>";
        while($row = mysqli_fetch_array($result)){
            echo "<B>Name: </B>".$row['names']." ";
            echo "<B>| Mark: </B>".$row['sno'];
            echo"<br>";   
        }
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
    <title>LMS/faculty/faculty3/smft</title>
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
    <h1>SORT MARKS & FIND TOPPER</h1>
    <form align="center" action="smft.php" method="POST">
        <input type="submit" name="submit" id="submit" value="GO">
    </form>
    </div>
</body>
</html>