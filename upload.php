<?php
mysql_connect("localhost","root","");
mysql_select_db("cycle");
session_start();
$name=$_POST['name'];
$year=$_POST['year'];
$hostel=$_POST['hostel'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass=$_POST['pass'];
mysql_query("insert into register(Name,Year,Hostel,PhoneNumber,Email,Password) values('$name','$year','$hostel','$phone','$email','$pass')");	
?>
