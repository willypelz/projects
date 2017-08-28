<?php
session_start();
include_once 'includes/dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: login.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<html>
<head>
<title>Welcome - <?php echo $userRow['user_email']; ?></title>
<link rel="stylesheet" href="styles/style.css" type="text/css" />
</head>
<body bgcolor="grey">
<div id="header">
	<div id="left">
    <label>Online Learning</label>
    </div>
    <div id="right">
    	<div id="content">
        	hi' <?php echo $userRow['user_name']; ?>&nbsp;&nbsp;<a href="logout.php?logout">Log-out</a>
        </div>
    </div>
</div>

<div id="body" style="color:red;">
	 Wecome to onlne learning management system <br />
    <p>We Focuse on PHP, MySQL, Ajax, jQuery, Web Design and more...</p>
</div>
<div id="prof">
<section><a href="#"><img src="images/rails.png"></a></section>
<section><a href="#"><img src="images/html.png"></a></section>
<section><a href="#"><img src="images/ajax.png"></a></section>
</div>
<div id="stupid">
    <section><a href="#"><img src="images/javascript.png"></a></section>
    <section><a href="#"><img src="images/mysql.png"></a></section>
</div>


</body>
</html>