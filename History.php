<html>
<head>
     <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Signup.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    History
    </title>
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
            opacity: 0.8;
            size: cover;
            height: 100%;
            width: 100%;
        }
        #go_button{
            z-index: 110;
        }
        #page-content{
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    </head>

<body>
        <img src="Pictures\Bing Wallpapers\tourwallpaper.jpg" class="background">
        <input type="checkbox" id="togglerr">
        <div id="toggler">
            <label id="tgl" for="togglerr">≡</label>
        </div>
            <div class="side_menu">
                <ul>
                	<li><a href="Homepage.html"><label>≡</label>Menu</a></li>
                    <li><a href="tour.php">Tour</a></li><br>
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
            <a href="Homepage.html"><img class="logo" src="Pictures/Logo/ATLAS_logo2.png"><span>Tours And Travels</span></a>
        </div>
        <div class="right_div">
            <ul>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">SignUp</a></li>
            </ul>
        </div>
    	</nav>
    <div id="page-content">
        <form action="History.php" method="post" onsubmit="return validate1();">
        <div id="center">
        <div id="form1" style="width:100%;display:inline-block;text-align:center">
        <div class="detail">
        <fieldset>
        <legend>Enter the User's details</legend>
        <div class="left">Enter your id<br>Enter Your First Name<br>Enter Your Last Name<br>Enter your password<br></div>
        <div class="right">   
        
        <input type="number" name="user_id" id="user_id" onfocus='change(this);' onfocusout='revert(this);'><br>
        <input type="text" name="user_firstname" id="user_firstname" onfocus='change(this);' onfocusout='revert(this);'><br>
        <input type="text" name="user_lastname" id="user_lastname" onfocus='change(this);' onfocusout='revert(this);'><br>
        <input type="password" name="user_password" id="user_password" onfocus='change(this);' onfocusout='revert(this);'><br>
        <input type="submit" name="go" id="go_button" value="Go">
        </div>
        </fieldset>
        </div></div></div></form>
        <script type="text/javascript">
            
        function validate1(){
            var n=document.getElementById("no_of_persons");
            var flag=0;
            
            var id=document.getElementById("user_id");
            if(id.value.length==0)
            {
                flag=1;
                id.placeholder="You Must Enter ID ";
            }
            var fn=document.getElementById("user_firstname");
            var ln=document.getElementById("user_lastname");
            if(fn.value.length==0)
            {
                flag=1;
                fn.placeholder="Must Enter Firstname";
            }
            if(ln.value.length==0)
            {
                flag=1;
                ln.placeholder="Mus Enter Lastname";
            }
            var pwd=document.getElementById("user_password");
            if(pwd.value.length==0)
            {
                flag=1;
                pwd.placeholder="Must Enter Password.";
            }
            return flag==0;
        }
        function change(x)
        {
            x.style.opacity="0.8";
        }
        function revert(x)
        {
            x.style.opacity="0.5";
        }

        </script>
    </div>
    </body>
    </html>
<?php
 $globalvar=0;
$usr_id=0;
$usr_fn="";
$usr_ln="";
    $conn=mysql_connect("localhost","root","localhost");
    $db=mysql_select_db("trysql",$conn);
    $query1="SELECT id,firstname,lastname,password from signup where id='$_POST[user_id]'";
    $result=mysql_query($query1);
    mysql_error();
    $row=mysql_fetch_array($result);
    $err="";
    $usr_fn=$_POST['user_firstname'];
    $usr_ln=$_POST['user_lastname'];
    $usr_id=$_POST['user_id'];
    if($row['firstname']!=$_POST['user_firstname']){
        $err.=",Firstname";
    }
    if($row['lastname']!=$_POST['user_lastname']){
        $err.=",Lastname";
    }
    if($row['password']!=$_POST['user_password']){
        $err.=",Password";
    }
    if(strlen($err)==0)
    {
        echo "<script>document.getElementById('user_id').value=".$row['id'].";";
        echo "document.getElementById('user_firstname').value='$_POST[user_firstname]'; ";
        echo "document.getElementById('user_lastname').value='$_POST[user_lastname]'; ";
        echo "document.getElementById('user_password').value='$_POST[user_password]'; ";
        echo "</script>";
        $query2="SELECT Firstname,Middlename,Lastname,Birthdate,Book_date FROM PERSON WHERE ID='$row[id]'";
        $dave=mysql_query($query2);
        echo "<div style='font-size:22;font-family:serif;color:blue;position:relative;top:350px;padding-left:30px;z-index:10'>";
        echo "<h1 style='color:#F88A3E;position:absolute;top:0px;'>Your History</h1>";
        echo "<table cellspacing='0px' style='width:auto;position:absolute;left:10px;top:100px;'>";
        $i=0;
        echo "<tr style='height:40px;'>";
        while ($i < mysql_num_fields($dave)){
            $meta = mysql_fetch_field($dave, $i);
            echo "<td style='border:2px black solid;width:auto;min-width:30px;text-align:center;'>".$meta->name."</td>";
            $i++;
        }
        echo "</tr>";
        while($row = mysql_fetch_assoc($dave)){
            echo "<tr style='height:30px;'>";
            foreach($row as $cname => $cvalue){
                echo "<td style='border:2px black solid;min-width:30px;text-align:center;'>$cvalue</td>";
            }
            echo "</tr>";
    }
    echo "</table></div>";    
    }
    else
    {
        echo "<script>window.alert('ID ".$err." May have been Wrong!!');</script>";
    }

?>