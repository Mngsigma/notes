<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .div1
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
        .p3
        {
          font-size:150%;
        }
    </style>
</head>
<body><div class="div1">
    <a class=p3 style="color:white;" href="teacherregister.php">create an account</a> <br>
    <form method='post'>
       <p class=p1 style="color:white;" >id:</p><input class="i1"  type="text" name="user" id=""> 
        <p class=p2 style="color:white;">password:</p><input type="text" class="i2" name="password" id=""> <br> <br>
        <input class="b1" type="submit" value="Log-In">

    </form>
    </div>
      <?php
 if(isset($_POST['user'])==true)
 {
    $a=$_POST['user'];
    $b=$_POST['password'];
    $con=mysqli_connect('localhost','root','123456789','notes','3306');
    $j="select * from teacher where id='$a' and password='$b'";
    $rs=mysqli_query($con,$j);
    if($row=mysqli_fetch_array($rs))
    {
        session_start();
        $_SESSION['u']=$a;
        echo"<script>window.location='teacherdashbord.php'</script>";
    
    }
    else{
        echo"galat passwaord...!!!";
    }

 }



    
    ?>
</body>
</html>