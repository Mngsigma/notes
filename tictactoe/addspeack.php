<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=LYeFaPWS"></script>
<script>
 function show(){
    var a=document.getElementById('t1').value;
    var b=document.getElementById('t2').value;
    var c=parseInt(a)+parseInt(b);
    responsiveVoice.speak("addition is " +c);
}
</script>
</head>
<body>
    <input type="text"  id="t1" >
    <input type="text"  id="t2" >
    <input type="button" value="add" onClick='show()'>
</body>
</html>