
<html>
<head>
<style>body{color:red;}
fieldset{background-color:black;
top:20;
width:300;
height:520;
color:white;
display-contents: inline;
}
#buttons
{
	border: 1px solid white;
	
	width: 310;
	padding:5px;
	text-align:center;
	margin-left:3px;
	
}
input[type=text]{ width:50%;
margin-bottom: 10px;
}
</style>
</head>
<?php
 session_start();
$val=$_SESSION['var'];
$bill=$val*0.5;
$adv=100;
$reward=500;
$tot=$bill-$adv-$reward;

echo'
<div id="buttons"><button>PROCEED TO PAY</button><span style="color:black">.....</span>
<a href="table.php"><button>BACK</button></a></div>
<body bgcolor="black">
<form>
<fieldset>
<legend><font face="algerian" size="4" color="red"><b>BILLING</b></font></legend>
<b>NAME OF CUSTOMER</b>:<br> ARVIND MODI<br><br>
<b>METER NUMBER</b>: 352678<br><br>
<b>AREA</b>: MARGAO, GOA<br>
<br>
<br>
<b>TOTAL POWER CONSUMED</b>:<br><input type="text"  value="'.$val.'">kw/h<br>
<b>CURRENT BILL AMOUNT</b>:<br><input type="text" value="'.$bill.'">Rs<br>
<b>ARREARS/ADVANCE</b>:<br><input type="text"  value="'.$adv.'">Rs<br>
<b>REWARDS</b>:<br><input type="text"  value="'.$reward.'">Rs<br>
<b>TOTAL AMOUNT TO BE PAID</b>:<br><input type="text" value="'.$tot.'">Rs<br><br>
<b>BILLING PERIOD</b>: 24/11/2016 TO 24/12/16 (31 DAYS)<br>
<b>DUE DATE</b><span style="color:black">..............</span>:15/01/2017
<br><br>

</fieldset>
</body>
</html
'
?>
