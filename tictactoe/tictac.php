<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=LYeFaPWS"></script>

    <script> var t=1;
    function restart()
    {
        var a1=document.getElementById('t1').value='';
      var a2=document.getElementById('t2').value='';
      var a3=document.getElementById('t3').value='';
      var a4=document.getElementById('t4').value='';
      var a5=document.getElementById('t5').value='';
      var a6=document.getElementById('t6').value='';
      var a7=document.getElementById('t7').value='';
      var a8=document.getElementById('t8').value='';
      var a9=document.getElementById('t9').value='';
      t=1;
    }
    function winner()
    {
      var a1=document.getElementById('t1').value;
      var a2=document.getElementById('t2').value;
      var a3=document.getElementById('t3').value;
      var a4=document.getElementById('t4').value;
      var a5=document.getElementById('t5').value;
      var a6=document.getElementById('t6').value;
      var a7=document.getElementById('t7').value;
      var a8=document.getElementById('t8').value;
      var a9=document.getElementById('t9').value;
      if((a1=='*' && a2=='*' && a3=='*') || (a4=='*' && a5=='*' && a6=='*') || (a7=='*' && a8=='*' && a9=='*') )
      {responsiveVoice.speak("player 1 is  winner");
        alert('player 1 winner!!!!!');
        
        restart();
      }
    
      if((a1=='1' && a2=='1' && a3=='1') || (a4=='1' && a5=='1' && a6=='1') || (a7=='1' && a8=='1' && a9=='1') )
      {   responsiveVoice.speak("player 2 is  winner");
        alert('player 2 winner!!!!!');
        restart();}
      if((a1=='*' && a4=='*' && a7=='*') || (a2=='*' && a5=='*' && a8=='*') || (a3=='*' && a6=='*' && a9=='*') )
      {responsiveVoice.speak("player 1 is  winner");
        alert('player 1 winner!!!!!');
        restart();}
    
      if((a1=='1' && a4=='1' && a7=='1') || (a2=='1' && a5=='1' && a8=='1') || (a3=='1' && a6=='1' && a9=='1') )
      {responsiveVoice.speak("player 2 is  winner");
        alert('player 2 winner!!!!!');
        restart();}
      if((a1=='*' && a5=='*' && a9=='*') || (a3=='*' && a5=='*' && a7=='*')  )
      {responsiveVoice.speak("player 1 is  winner");
        alert('player 1 winner!!!!!');
        restart();}
    
      if((a3=='1' && a5=='1' && a7=='1') || (a1=='1' && a5=='1' && a9=='1') || (a3=='1' && a6=='1' && a9=='1') )
      {responsiveVoice.speak("player 2 is  winner");
        alert('player 2 winner!!!!!');
        restart();}
      if(t==10)
      {
       alert("draw the match");
        restart();       
      }
    }
        function show1()
        { 
            if(document.getElementById('t1').value.length==0)
            {
          if(t%2==1)
          { responsiveVoice.speak("star");
            document.getElementById('t1').value='*';
            t++; winner();
          }
          else
          {responsiveVoice.speak("one");
            document.getElementById('t1').value='1';
            t++; winner();
          }
        } 
        }
        function show2()
        {  
            if(document.getElementById("t2").value.length==0)
            {
                
            if(t%2==1)
          {responsiveVoice.speak("star");
            document.getElementById('t2').value='*';
            t++; winner();
          }
          else
          {
            document.getElementById('t2').value='1';
            t++;winner();
          } 
            }
        }
        function show3()
        { if(document.getElementById("t3").value.length==0)
            {
            if(t%2==1)
          {responsiveVoice.speak("star");
            document.getElementById('t3').value='*';
            t++; winner();
          } 
          else
          {responsiveVoice.speak("one");
            document.getElementById('t3').value='1';
            t++; winner();
          }
        }}
        function show4()
        { if(document.getElementById("t4").value.length==0)
            {
            if(t%2==1)
          {responsiveVoice.speak("star");
            document.getElementById('t4').value='*';
            t++; winner();
          }
          else
          {responsiveVoice.speak("one");
            document.getElementById('t4').value='1';
            t++; winner();
          }
        }}
        function show5()
        { if(document.getElementById("t5").value.length==0)
            {
            if(t%2==1)
          {responsiveVoice.speak("star");
            document.getElementById('t5').value='*';
            t++; winner();
          } 
          else
          {responsiveVoice.speak("one");
            document.getElementById('t5').value='1';
            t++; winner();
          }} 
        }
        function show6()
        { if(document.getElementById("t6").value.length==0)
            {
            if(t%2==1)
          {responsiveVoice.speak("star");
            document.getElementById('t6').value='*';
            t++; winner();
          }
          else
          {responsiveVoice.speak("one");
            document.getElementById('t6').value='1';
            t++; winner();
          } 
        }}
        function show7()
        { if(document.getElementById("t7").value.length==0)
            {
            if(t%2==1)
          {responsiveVoice.speak("star");
            document.getElementById('t7').value='*';
            t++; winner();
          }
          else
          {responsiveVoice.speak("one");
            document.getElementById('t7').value='1';
            t++; winner();
          } 
        }}
        function show8()
        { if(document.getElementById("t8").value.length==0)
            {
            if(t%2==1)
          {responsiveVoice.speak("star");
            document.getElementById('t8').value='*';
            t++; winner();
          }
          else
          {responsiveVoice.speak("one");
            document.getElementById('t8').value='1';
            t++; winner();
          }
        }}
        function show9()
        {    if(document.getElementById("t9").value.length==0)
            {
            if(t%2==1)
          {responsiveVoice.speak("star");
            document.getElementById('t9').value='*';
            t++; winner();
          }
          else
          {responsiveVoice.speak("one");
            document.getElementById('t9').value='1';
            t++;winner();
          }
        }}
    </script>
</head>
<body> Tik Tak Toe
    <div class="swatimorjaan">
    <input type="button" id="t1" onClick="show1()">
    <input type="button" id="t2" onClick="show2()">
    <input type="button" id="t3" onClick="show3()">

     <br>
    <input type="button" id="t4" onClick="show4()">
    <input type="button" id="t5" onClick="show5()">
    <input type="button" id="t6" onClick="show6()">
    
<br>
        <input type="button" id="t7" onClick="show7()">
    <input type="button" id="t8" onClick="show8()">
    <input type="button" id="t9" onClick="show9()">
    </div>
</body>
</html>