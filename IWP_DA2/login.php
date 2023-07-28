<?php
$conn = mysqli_connect("localhost", "root", "", "da2");
if($conn-> connect_error)
    die("connection failed:".$conn->connect_error);
if(isset($_POST['usr'])){
    $usr = $_POST['usr'];
    $pas = $_POST['pas'];
    $c=0;
    $query = "SELECT usr,pas FROM det";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result)){
        if(strcmp($row['usr'],$usr)==0 && $row['pas']==$pas && $usr[0]=='f'){
            header("Location:http://localhost/IWP_DA2/faculty.html");
            $c=1;
        }
        else if(strcmp($row['usr'],$usr)==0 && $row['pas']==$pas && $usr[0]=='s'){
            header("Location:http://localhost/IWP_DA2/student1.php");
            $c=1;
        }
    }
    if($c==1)
        echo "<I><B>Incorrect Credentials!! Try again..</B></I>";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <style>
        h1{
            text-align: center;
        }
        input[type="text"],[type="password"],[type="submit"]{
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
        }
        input[type="submit"]{
            background-color: rgb(17, 0, 255);
            color: white;
        }
        input[type="submit"]:hover{
            background-color: rgb(0, 0, 0);
        }
        div{
            padding-top: 200px;
        }
    </style>
</head>
<body>
    <div>
    <h1>LOGIN</h1>
    <form action="login.php" method="POST" align="center">
        <input type="text" placeholder="Username" name="usr" id="usr" size="30"><br>
        <input type="password" placeholder="Password" name="pas" id="pas" size="30"><br>
        <input type="submit" value="Log in" size="30" style="width: 235px;">
    </form>
    </div>
</body>
</html>