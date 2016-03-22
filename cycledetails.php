<?php
mysql_connect("localhost","root","");
mysql_select_db("cycle");
session_start();
$id=$_REQUEST['sid'];
$name=$_REQUEST['name'];
$year=$_REQUEST['year'];
$hostel=$_REQUEST['hostel'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$picture=$_FILES['file']['name'];
mysql_query("insert into student(Name,YearOfStudy,Hostel,PhoneNumber,Email,Picture) values('$name','$year','$hostel','$phone','$email','$picture')");	
?>
