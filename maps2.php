<html>
<head>
<script language="Javascript">
function hideA()
{

    document.getElementById("A").style.visibility="hidden";
    document.getElementById("B").style.visibility="visible";    

}

function hideB()
{
    document.getElementById("B").style.visibility="hidden";
    document.getElementById("A").style.visibility="visible";

}
</script>
</head>
<body>Show : 
<input type="radio"  name="aorb" onClick="hideB()" checked>A | 
<input type="radio"  name="aorb" onClick="hideA()">B
<div style="position: absolute; left: 10px; top: 100px;" id="A"><br/>A's text</div>
<div style="position: absolute; left: 10px; top: 100px; visibility:hidden" id="B"><br/>B's text</div>
</body>
</html>