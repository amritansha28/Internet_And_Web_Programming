<?php
$con = mysqli_connect("localhost", "root", "", "da2");
if($con-> connect_error) 
    die("connection failed:".$con->connect_error);
if(isset($_POST['submit'])) {
    if(!empty($_POST['ques11'])){
        $insert = false;
        foreach($_POST['ques11'] as $ques11){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques11', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques12'])){
        $insert = false;
        foreach($_POST['ques12'] as $ques12){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques12', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques13'])){
        $insert = false;
        foreach($_POST['ques13'] as $ques13){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques13', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques14'])){
        $insert = false;
        foreach($_POST['ques14'] as $ques14){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques14', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques15'])){
        $insert = false;
        foreach($_POST['ques15'] as $ques15){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques15', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    header("Location:http://localhost/IWP_DA2/student4.php");
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wvalueth=device-wvalueth, initial-scale=1.0">
    <title>LMS/student3</title>
    <style>
        h1{
            text-align: center;
            padding-top: 20px;
        }
        h3{
            padding-top: 40px;
        }
        input[type="submit"]{
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            background-color: rgb(17, 0, 255);
            color: white;
            margin-top: 40px;
        }
        input[type="submit"]:hover{
            background-color: rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <div>
    <h1>MCQ (Page 3/4)</h1>
    <form align="center" action="student3.php" method="POST">
        <h3>Question 11</h3>
        <input type="checkbox" value="OptA" name="ques11[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques11[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques11[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques11[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 12</h3>
        <input type="checkbox" value="OptA" name="ques12[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques12[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques12[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques12[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 13</h3>
        <input type="checkbox" value="OptA" name="ques13[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques13[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques13[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques13[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 14</h3>
        <input type="checkbox" value="OptA" name="ques14[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques14[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques14[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques14[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 15</h3>
        <input type="checkbox" value="OptA" name="ques15[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques15[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques15[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques15[]">
        <label for="OptD">d) Option D</label><br>

        <input type="submit" name="submit" value="Next Page">
    </form>
    </div>
</body>
</html>