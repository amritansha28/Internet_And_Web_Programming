<?php
$to = "cw.cc@vit.ac.in";
$subject = $_POST['sub'];
$txt = $_POST['msg'];
$headers = "From: proctor@vit.ac.in" . "\r\n" .
"CC: cso.cc@vit.ac.in";
mail($to,$subject,$txt,$headers);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS/faculty/mail</title>
    <style>
        div{
            text-align: center;
            padding-top: 130px;
        }
        input[type="text"],[type="submit"],textarea{
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
    </style>
</head>
<body>
    <div>
    <h1>OUTING APPROVAL MAIL</h1>
    <form action="faculty2.php" method="POST">
        <input type="text" name="sub" id="sub" placeholder="Subject" size="77"><br>
        <textarea name="msg" id="msg" placeholder="Mail content" rows="15" cols="75"></textarea><br>
        <input type="submit" value="Mail">
    </form>
    </div>
</body>
</html>