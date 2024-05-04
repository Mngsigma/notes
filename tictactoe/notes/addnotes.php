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
        top:13%;
       
        
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
        .submit
        {
          height:30px;
          width:150px;
          background-color:greenyellow;
          margin-left:20px;
          font-size: 20px;
        }
        .file
        {
           
          width:150px;
          background-color:greenyellow;
        }
    </style>
</head>
<body>
    <form method='POST' enctype="multipart/form-data">
      <div class="div2">

      </div>
      <div class="div1">
      <p class=p1 style="font-size:25px";> Date: </p> <input class="i1" type="text" name="date" id=""> 
      <p class=p2 style="font-size:25px";>Subject:</p> <input class="i2" type="text" name="subject" id=""> 
      <p class=p3 style="font-size:25px";>Topic:</p> <input class="i3" type="text" name="topic" id=""> 

       <br><br> <input class=file type="file" name="file" id=""> 
        <input type="submit" class=submit value="upload">
        </div>
    </form>
    <?php
      if(isset($_POST['date'])==true)
      {
        $a=$_POST['date'];
        $b=$_POST['subject'];
        $c=$_POST['topic'];
        $t=$_FILES['file']['tmp_name'];
        $n=$_FILES['file']['name'];
        if(move_uploaded_file($t,$n))
        {
            $con=mysqli_connect('localhost','root','123456789','notes','3306');
            $j="insert into notes values('$a','$b','$c','$n')";
            $rs=mysqli_query($con,$j);
            if($rs)
            {
              echo" <br> <br> save successfully...!!";
            }
            else{
                    echo"error";
            }
        }
        else
        {
           echo"error le uploading...!!!!";
        }
      }

    ?>
</body>
</html>