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
          height: 400px;
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
          font-size:30px;
        }
        .submit
        {
          height:30px;
          width:150px;
          background-color:greenyellow;
          margin-left:20px;
          font-size: 20px;
        }
    </style>
</head>
<div class="div2"></div>
<body><div class="div1">
<a class=p3 style="color:white;" href="studentregister.php">create an account</a> <br>
    <form method='post'>
    <p class=p1 style="color:white;" >roll no.:</p><input class="i1"  type="text" name="user" id=""> 
        <p class=p2 style="color:white;">password:</p><input type="text" class="i2" name="password" id=""> <br> <br>
        <input class="submit" type="submit" value="Log-In">


    </form>
    </div>
    <?php

if(isset($_POST['user'])==true)
{
   $a=$_POST['user'];
   $b=$_POST['password'];
   $con=mysqli_connect('localhost','root','123456789','notes','3306');
   $j="select * from student where rno='$a' and password='$b'";
   $rs=mysqli_query($con,$j);
   if($row=mysqli_fetch_array($rs))
   {
       session_start();
       $_SESSION['u']=$a;
       echo"<script>window.location='studentdashbord.php'</script>";
   
   }
   else{
       echo"galat passwaord...!!!";
   }

}


    ?>
</body>
</html>