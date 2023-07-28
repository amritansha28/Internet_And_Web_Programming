<?php
$con = mysqli_connect("localhost", "root", "", "da2");
if($con-> connect_error)
    die("connection failed:".$con->connect_error);
if(isset($_POST['submit'])) {
    if(!empty($_POST['ques1'])){
        $insert = false;
        foreach($_POST['ques1'] as $ques1){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques1', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques2'])){
        $insert = false;
        foreach($_POST['ques2'] as $ques2){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques2', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques3'])){
        $insert = false;
        foreach($_POST['ques3'] as $ques3){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques3', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques4'])){
        $insert = false;
        foreach($_POST['ques4'] as $ques4){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques4', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    if(!empty($_POST['ques5'])){
        $insert = false;
        foreach($_POST['ques5'] as $ques5){
            $sql = "INSERT INTO `da2`.`mcqea` (`enteredans`, `date`) VALUES ('$ques5', current_timestamp());";
            if($con->query($sql) == true){
                $insert = true;
            }
        }
    }
    header("Location:http://localhost/IWP_DA2/student2.php");
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wvalueth=device-wvalueth, initial-scale=1.0">
    <title>LMS/student1</title>
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
    <h1>MCQ (Page 1/4)</h1>
    <form align="center" action="student1.php" method="POST">
        <h3>Question 1</h3>
        <input type="checkbox" value="OptA" name="ques1[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques1[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques1[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques1[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 2</h3>
        <input type="checkbox" value="OptA" name="ques2[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques2[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques2[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques2[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 3</h3>
        <input type="checkbox" value="OptA" name="ques3[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques3[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques3[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques3[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 4</h3>
        <input type="checkbox" value="OptA" name="ques4[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques4[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques4[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques4[]">
        <label for="OptD">d) Option D</label>

        <h3>Question 5</h3>
        <input type="checkbox" value="OptA" name="ques5[]">
        <label for="OptA">a) Option A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptB" name="ques5[]">
        <label for="OptB">b) Option B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptC" name="ques5[]">
        <label for="OptC">c) Option C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" value="OptD" name="ques5[]">
        <label for="OptD">d) Option D</label><br>

        <input type="submit" name="submit" value="Next Page">
    </form>
    </div>
</body>
</html>