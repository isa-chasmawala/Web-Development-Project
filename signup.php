<?php
$conn=mysql_connect("localhost","root","") or die("error connection");
$db=mysql_select_db("Tours",$conn);
$query="INSERT into signup(firstname,middlename,lastname,email,password,contact,city,address) VALUES('$_POST[fn]','$_POST[mn]','$_POST[ln]','$_POST[email]','$_POST[pwd1]','$_POST[contact]','$_POST[City]','$_POST[addr]')";
mysql_query($query,$conn);
mysql_error($conn);
$query1="SELECT * from signup WHERE firstname='$_POST[fn]' and middlename='$_POST[mn]' and lastname='$_POST[ln]'";
$result=mysql_query($query1);
$row=mysql_fetch_array($result);
echo "<div style='font-size:22;font-family:serif'>";
echo "<h1 style='color:#F88A3E'>Now you are Atlas Member</h1>";
echo "<h2 style='color:#663EF8'>Your Details</h2><br>";
//echo "<b style='color:#F83E5B;font-size:30;'>Your ID:  ".$row['id']."</b><br>";
echo "<b style='color:#F83E5B'>Name:</b>  ".$row['firstname']." ".$row['middlename']." ".$row['lastname']."<br><br>";
echo "<b style='color:#F83E5B'>Email:</b>  ".$row['email']."<br><br>";
echo "<b style='color:#F83E5B'>Contact number:</b>  ".$row['contact']."<br><br>";
echo "<b style='color:#F83E5B'>Address:</b>  ".$row['address']."<br><br>";
echo "</div>";
mysql_close($conn);
?>