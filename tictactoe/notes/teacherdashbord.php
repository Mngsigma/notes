<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body1
        {
           width: 200%;
           
           margin-top:100px;
           margin-left:0px;
        }
        .div1
        {
            position: absolute;
            left:35%;
        }
    </style>
</head>
    
<body> <?php
session_start();
         if(isset($_SESSION['u'])==false)
         {
            echo"<script>window.location='teacherlogin.php'</script>";
         }
?>

    <div class="div1">
<h1 style="font-size:70px";> welcome teacher...! </h1>

<a style="font-size:40px" href="addnotes.php">(1)notes</a> <br>
<a style="font-size:40px" href="logout.php">(2)logout</a></div>
<img class="body1" src="PngItem_5570688.png" alt="">

</body>
</html>