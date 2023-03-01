<html>
<head>
<title>Test Delay Display Page By IuR</title>
</head>
<body onload="displaypage()">

<script type="text/javascript">
function displaypage()<br/>
{
var t = setTimeout("displaydiv()",3000);// it will Delay for 3 seconds
}

function displaydiv()
{
document.getElementById("wrapperdiv").style.display='block';
}

</script>
<div id="wrapperdiv" style="display:none;height:500px;width:300px;background-color:red;">
</div>

</body>
</html>