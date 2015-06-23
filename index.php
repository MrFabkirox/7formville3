<!DOCTYPE HTML>
<html>
<head>
    <title>7formville3</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type='text/javascript' src='script.js'></script>

</head>
<body>

<div id="right"><?php include("menu.php"); ?></div>

<div id="left">

<h3>7formville3, index</h3>

<p><span id="errorEmptyField">Error message here if needed</span></p>


<form action="./traitementExo1.php" method="POST" onsubmit="return !!(checkEmpty('name') & checkEmpty('psw'));">

<label for="name">Name</label>
<input type="text" name="name" id="name"/><br />

<label for="psw">Pass</label>
<input type="password" name="psw" id="psw"/><br />

Sex :
<label for="m">Male</label>
<input type="radio" name="sex" id="m" value="Man"/>
<label for="f">Female</label>
<input type="radio" name="sex" id="f" value="Woman"/><br />

<label for="city"/>
<select name="city">
    <option>Paris</option>
    <option>London</option>
</select><br />

Hobbies :
<label for="bike">Bike</label>
<input type="checkbox" name="hobbies[]" id="bike" value="Bike"/>
<label for="tennis">Tennis</label>
<input type="checkbox" name="hobbies[]" id="tennis" value="Tennis"/><br />

<label for="cars">Car: </label>
<select name="cars[]" multiple="multiple">
    <option>supra</option>
    <option>subaru</option>
</select>

<input type="submit" /><br />

</form>





</div>



</body>
</html>