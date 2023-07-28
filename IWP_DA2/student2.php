<?php
$con = mysqli_connect("localhost", "root", "", "da2");
if($con-> connect_error)
    die("connection failed:".$con->connect_error);
if(isset($_POST['submit'])) {
    if(!empty($_POST['ques6'])){
        $insert = false;
        foreach($_POST['ques6'] as $ques6){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques6', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques7'])){
        $insert = false;
        foreach($_POST['ques7'] as $ques7){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques7', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques8'])){
        $insert = false;
        foreach($_POST['ques8'] as $ques8){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques8', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques9'])){
        $insert = false;
        foreach($_POST['ques9'] as $ques9){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques9', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques10'])){
        $insert = false;
        foreach($_POST['ques10'] as $ques10){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques10', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    header("Location:http://localhost/IWP_DA2/student3.php");
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wvalueth=device-wvalueth, initial-scale=1.0">
    <title>LMS/student2</title>
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
    <h1>MCQ (Page 2/4)</h1>
    <form align="center" action="student2.php" method="POST">
        <h3>Question 6</h3>
        <input type="checkbox" value="OptA" name="ques6[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques6[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques6[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques6[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 7</h3>
        <input type="checkbox" value="OptA" name="ques7[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques7[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques7[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques7[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 8</h3>
        <input type="checkbox" value="OptA" name="ques8[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques8[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques8[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques8[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 9</h3>
        <input type="checkbox" value="OptA" name="ques9[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques9[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques9[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques9[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 10</h3>
        <input type="checkbox" value="OptA" name="ques10[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques10[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques10[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques10[]">
        <label for="OptD">d) Option D</label><br>

        <input type="submit" name="submit" value="Next Page">
    </form>
    </div>
</body>
</html>