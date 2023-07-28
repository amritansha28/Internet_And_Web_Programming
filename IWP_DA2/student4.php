<?php
$con = mysqli_connect("localhost", "root", "", "da2");
if($con-> connect_error)
    die("connection failed:".$con->connect_error);
if(isset($_POST['submit'])) {
    if(!empty($_POST['ques16'])){
        $insert = false;
        foreach($_POST['ques16'] as $ques16){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques16', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques17'])){
        $insert = false;
        foreach($_POST['ques17'] as $ques17){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques17', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques18'])){
        $insert = false;
        foreach($_POST['ques18'] as $ques18){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques18', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques19'])){
        $insert = false;
        foreach($_POST['ques19'] as $ques19){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques19', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques20'])){
        $insert = false;
        foreach($_POST['ques20'] as $ques20){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques20', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    header("Location:http://localhost/IWP_DA2/student5.php");
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wvalueth=device-wvalueth, initial-scale=1.0">
    <title>LMS/student4</title>
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
    <h1>MCQ (Page 4/4)</h1>
    <form align="center" action="student4.php" method="POST">
        <h3>Question 16</h3>
        <input type="checkbox" value="OptA" name="ques16[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques16[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques16[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques16[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 17</h3>
        <input type="checkbox" value="OptA" name="ques17[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques17[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques17[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques17[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 18</h3>
        <input type="checkbox" value="OptA" name="ques18[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques18[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques18[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques18[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 19</h3>
        <input type="checkbox" value="OptA" name="ques19[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques19[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques19[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques19[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 20</h3>
        <input type="checkbox" value="OptA" name="ques20[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques20[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques20[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques20[]">
        <label for="OptD">d) Option D</label><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
</body>
</html>