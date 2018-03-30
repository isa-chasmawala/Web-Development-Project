<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Signup.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tours</title>
    <style type="text/css">
        .detail
        {
            width:60%;
            display: inline-block;
            margin:0 auto;
        }
        .center
        {
            display:block;
            margin:auto;
            width:80%;
        }
        .conatainer
        {
            width:100%;
            position:absolute;
            top:30px;
        }
        .left
        {
            width:47%;
            float:left;
            text-align: right;
            line-height: 37px;
            vertical-align: middle;
        }
        .right
        {
            width:47%;
            float:right;
            text-align: left;
        }
        .right input
        {
            margin-top: 10px;
            height: 25px;
            background-color: #C8C5C4;
            opacity:0.6;color:#463AFA;
        }
        input
        {
            margin-top: 10px;
            height: 25px;
            background-color: #C8C5C4;
            opacity:0.6;color:#463AFA;   
        }
        .background{
            position: fixed;
            z-index: -1;
            opacity: 0.5;
            size: cover;
            height: 100%;
            width: 100%;
        }
        #page-content{
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    </head>
<body>
<input type="checkbox" id="togglerr">
        <div id="toggler">
            <label id="tgl" for="togglerr">≡</label>
        </div>
            <div class="side_menu">
                <ul>
                	<li><label>≡</label>Menu</li>
                    <li><a href="tour.html">Tour</a></li><br>
                    <li><a href="History.html">Your History</a></li><br>
                    <li><a href="tickets.html">Tickets</a></li><br>
                    <li><a href="visa.html">Visa</a></li><br>
                    <li><a href="forex.html">Forex</a></li><br>
                    <li><a href="hotels.html">Hotel</a></li><br>
                </ul>
            </div>
    	<nav class="head_div">
        <div class="head_title">
             <!-- ATLAS TOURS AND TRAVELS -->
            <img class="logo" src="Pictures/Logo/ATLAS_logo2.png"><span>Tours And Travels</span>
        </div>
        <div class="right_div">
            <ul>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">SignUp</a></li>
            </ul>
        </div>
    	</nav>
    	<div id="page-content">
        <img src="Pictures\Bing Wallpapers\tourwallpaper.jpg" class="background">

        <script>
           
        </script>
    	</div>
</body>
</html>
<?php
    $conn=mysql_connect("localhost","root","localhost");
    $db=mysql_select_db("trysql",$conn);
    $id=$_POST['hiddenbox'];
    $i;
    for($i=1;array_key_exists("fname".$i,$_POST);$i++)
    {
        $val1=$_POST['fname'.$i];
        $val2=$_POST['mname'.$i];
        $val3=$_POST['lname'.$i];
        $val4=$_POST['bdate'.$i];
        $val_Date=date('Y-m-d');
        $query1="INSERT INTO person(ID,Firstname,Middlename,Lastname,Birthdate,Book_Date) values ('$id','$val1','$val2','$val3','$val4','$val_Date');";
        $result=mysql_query($query1);
        echo "<div style='font-size:22;font-family:serif;position:relative;top:100px;left:30px;'>";
        echo "<h1 style='color:#F88A3E'>Ticket Booked for Person$i</h1>";
        echo "<h2 style='color:#663EF8'>Person$i Details:</h2><br>";
        // echo "<b style='color:#F83E5B;font-size:30;'>Your ID:  ".$_POST['id']."</b><br>";
        echo "<b style='color:#F83E5B'>Name:</b>  ".$_POST['fname'.$i]." ".$_POST['mname'.$i]." ".$_POST['lname'.$i]."<br><br>";
        echo "<b style='color:#F83E5B'>Birthdate:</b>  ".$_POST['bdate'.$i]."<br><br>";
        echo "</div>";
    }
?>