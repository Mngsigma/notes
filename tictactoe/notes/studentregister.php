<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
      { width:100%;
        background-image:url("bg1.jpg");
      }
      .div1
      { width:500px;
        height: 500px;
        
        position: absolute;
        left:40%;
        top:20%;
       
        
      }
      .div2
        {
          width: 600px;
          height: 700px;
          position: absolute;
          top: 80px;
          left: 450px;
          background-color: black;
          opacity: 70%;
          border-radius: 3%;
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
        .i3
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
        .i4
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
        .i5
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
        
        .p1
        {
          color: white;
        }
        .p2
        {
          color: white;
        }
        .p3
        {
          color: white;
        }
        .p4
        {
          color: white;
          
        }
        .p5
        {
          color: white;
        }
        .submit
        {
          height:30px;
          width:150px;
          background-color:greenyellow;
          margin-left:20px;
          font-size: 20px;
        }
        .p{
          position:absolute;
          left:45%;
          top:92%;
          font-size:150%;
          color:white;
        }
        .a
        {
          color:white;
        }
    </style>
</head>
<body>
    <form action=""> <div class="div2"></div> <div class="div1">
       <h3 class=p1>Roll no.:</h3><input class=i1 type="text" name="id" id=""> <br>
       <h3 class=p2>Name:</h3><input type="text" class=i2 name="name" id=""> <br>
       <h3 class=p3>Branch:</h3><input type="text" class=i3 name="branch" id=""> <br>
       <h3 class=p4>Semester:</h3><input type="text" class=i4 name="semester" id=""> <br>
       <h3 class=p5>Password:</h3><input type="text" class=i5 name="password" id=""> <br> <br>
        <input class=submit type="submit" value="save">
        </div>
      </form>
    <?php

session_start();
    if(isset($_SESSION['u'])==false)
    {
       echo"<script>window.location='teacherlogin.php'</script>";
    }


     if(isset($_GET['id'])==true)
     {
       $a=$_GET['id'];
       $b=$_GET['name'];
       $c=$_GET['branch'];
       $d=$_GET['semester'];
       $e=$_GET['password'];
       $con=mysqli_connect('localhost','root','123456789','notes','3306');
       $j="insert into student values('$a','$b','$c','$d','$e') ";
       $rs=mysqli_query($con,$j);
       if($rs)
       {
          echo"<p class=p>account create successfully...! <br> <a class=a href='studentlogin.php'>login to continue..!</a></p> "; 
       }
       else
       {
         echo"error occure when your save ...!";
       }

     }
      
     ?>
</body>
</html>