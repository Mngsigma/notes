<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .siv1
      {
        width:40%;
        height: 50px;
        position: absolute;
        top:40%;
            left:39%;
           

      }
      body
        {
            background-image:url("a1.jpg");
            background-size: 100%;
            background-repeat: no-repeat;
         
        }
        .i1
        {
            width: 300px;
            height: 25px;
            background:transparent;
            border:none;
            border-bottom-color: white;
            border-bottom-style:solid ;
            border-bottom-width: 0.7px;

            color:white;
        }
        .i2
        {
            width: 300px;
            height: 25px;
            background: transparent;
            border: none;
            border-bottom-color: wheat;
            border-bottom-style:solid;
            border-bottom-width: 1px ;
            color:white;
        }
        .b1
        {

            width: 200px;
            height: 50px;
            background-color: rgb(141, 212, 0);
            border-radius: 10px;
            font-size: larger;
        }
        .p1
        {
          font-size:150%;
        }
        .p2
        {
          font-size:150%;
        }
        i1
        {
            width: 300px;
            height: 25px;
            background:transparent;
            border:none;
            border-bottom-color: white;
            border-bottom-style:solid ;
            border-bottom-width: 0.7px;

            color:white;
        }
        .i2
        {
            width: 300px;
            height: 25px;
            background: transparent;
            border: none;
            border-bottom-color: wheat;
            border-bottom-style:solid;
            border-bottom-width: 1px ;
            color:white;
        }
        .a{

          color:white;
          position:absolute;
          top:85%;
          left:44%;
          font-size:200%;
        }
        .submit
        {
          width:30%;
          height:25px;
          background-color:greenyellow;
        }
        .d
        {
          color: white;
        }
       
    </style>
</head>
<body> <form method="POST" action="">
  <div class="siv1">
<h1 class=p3 style="color:white;"> welcome BIT student...! </h1>

<p class=p1 style="color:white;" >Subject:</p><input class="i1" type="text" name="subject" id=""> 
<p class=p2 style="color:white;" >Topic:</p><input class="i2" type="text" name="topic" id=""> <br> <br>
<input class=submit type="submit" value="search"> <a class=d style="font-size:20px" href="logout1.php">Logout</a> <br>
</div>
</form>
<?php

session_start();
    if(isset($_SESSION['u'])==false)
    {
       echo"<script>window.location='teacherlogin.php'</script>";
    }


     if(isset($_POST['subject'])==true)
     {
       $a=$_POST['subject'];
       $b=$_POST['topic'];
       
       $con=mysqli_connect('localhost','root','123456789','notes','3306');
       $j="select * from notes where subject='$a'and topic='$b' ";
       $rs=mysqli_query($con,$j);
       echo"
         <table border=1><tr><td>pdf</td></tr>
       ";
       while($row=mysqli_fetch_array($rs))
       {
          echo"
             <tr><td><a class=a href='$row[pdf]'>pdf download</a></td></tr>
          "; 
       }
       echo"</table>";
      
     }
      
     ?>


</body>
</html>