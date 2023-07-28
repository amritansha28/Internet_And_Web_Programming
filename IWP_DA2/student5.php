<?php
$con = mysqli_connect("localhost", "root", "", "da2");
if($con-> connect_error) {
    die("connection failed:".$con->connect_error);
}
$crctans = array("OptA","OptB","OptC","OptD","OptA","OptB","OptC","OptD","OptA","OptB","OptC","OptD","OptA","OptB","OptC","OptD","OptA","OptB","OptC","OptD");
$query = "SELECT enteredans from mcqea";
$result = mysqli_query($con,$query);
$i=0;
$count=0;
while($row = mysqli_fetch_array($result)){
    if($row['enteredans']==$crctans[$i]){
        $count++;
    }
    $i++;
}
echo "<center><B><p style='font-size:40px;padding:300px'>Marks Scored: $count/20</p></B></center>";
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS/student5</title>
</head>
<body>
</body>
</html>