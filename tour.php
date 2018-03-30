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
<img src="Pictures\Bing Wallpapers\tourwallpaper.jpg" class="background">
<input type="checkbox" id="togglerr">
        <div id="toggler">
            <label id="tgl" for="togglerr">≡</label>
        </div>
            <div class="side_menu">
                <ul>
                	<li><a href="Homepage.html"><label>≡</label>Menu</a></li>
                    <li><a href="tour.php">Tour</a></li><br>
                    <li><a href="History.php">Your History</a></li><br>
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
        <form action="tour.php" method="post" onsubmit="return validate1();">
        <div id="center">
        <div id="form1" style="width:100%;display:inline-block;text-align:center">
        <div class="detail">
        <fieldset>
        <legend>Enter the User's details</legend>
        <div class="left">Enter the number of persons<br><!-- Enter your id<br> -->Enter Your First Name<br>Enter Your Last Name<br>Enter your password<br></div>
        <div class="right">   
        <input type="number" name="no_of_persons" id="no_of_persons"  onfocus='change(this);' onfocusout='revert(this);'><br>
       <!--  <input type="number" name="user_id" id="user_id" onfocus='change(this);' onfocusout='revert(this);'><br> -->
        <input type="text" name="user_firstname" id="user_firstname" onfocus='change(this);' onfocusout='revert(this);'><br>
        <input type="text" name="user_lastname" id="user_lastname" onfocus='change(this);' onfocusout='revert(this);'><br>
        <input type="password" name="user_password" id="user_password" onfocus='change(this);' onfocusout='revert(this);'><br>
        <input type="submit" name="go" id="go_button" value="Go">
        </div>
        </fieldset>
        </div></div></div></form>
        <form action="tour.php" method="post" onsubmit="return validate();">
        <div id="person_details"></div>
        <input type="number" name="hiddenbox" id="hiddenbox" style="z-index:-10;position:fixed;top:0px;">
        <script>

            function showPersons(){
            var x=document.getElementById("no_of_persons").value;
            document.getElementById("hiddenbox").value=document.getElementById("user_id").value;
            document.getElementById("no_of_persons").readOnly=true;
           // document.getElementById("user_id").readOnly=true;
            document.getElementById("user_password").readOnly=true;
            document.getElementById("user_firstname").readOnly=true;
            document.getElementById("user_lastname").readOnly=true;
            document.getElementById("go_button").disabled=true;            
            var i=0;
            var person="<div class='input_person_info'>";
            for(i=1;i<=x;i++)
            {
                person+="<div><div class='center'><fieldset>\
                        <legend>Person"+i+"</legend>           \
                        <div class='container'>\
                        <div class='left'>Enter the Firstname of The Person<br>\
                        Enter the Middlename of The Person<br>\
                        Enter the Lastname of The Person<br>\
                        Enter the Birthdate\
                        </div>\
                        <div class='right'><input type='text' name='fname"+i+"' onfocus='change(this);' onfocusout='revert(this);'><br>\
                        <input type='text' name='mname"+i+"' onfocus='change(this);' onfocusout='revert(this);'><br>\
                        <input type='text' name='lname"+i+"' onfocus='change(this);' onfocusout='revert(this);'><br>\
                        <input type='date' name='bdate"+i+"'<br></div></div></fieldset></div></div>";
            }
            document.getElementById("person_details").innerHTML=person+"</div><br><p style='text-align:center;'><input type='submit' id='submit_details' name='submit_details' value='Submit'></p>";
        }

        function validate1(){
            var n=document.getElementById("no_of_persons");
            var flag=0;
            if(n.value=="")
            {
                flag=1;
                n.placeholder="Enter the number of persons";
            }
            else if(n==0)
            {
                flag=1;
                n.placeholder="Enter a valid number";
            }
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
                ln.placeholder="Must Enter Lastname";
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

        function validate()
        {
            var x=document.getElementById("no_of_persons").value;
            var i=0;
            var flag=0;
            for(i=1;i<=x;i++)
            {
                var e1=document.getElementsByName("fname"+i)[0];
                var e2=document.getElementsByName("mname"+i)[0];
                var e3=document.getElementsByName("lname"+i)[0];
                var e4=document.getElementsByName("bdate"+i)[0];
                if(e1.value.length==0)
                { 
                    flag=1;
                    e1.placeholder="Must Enter the First Name.";
                }
                if(e2.value.length==0)
                { 
                    flag=1;
                    e2.placeholder="Must Enter the Middle Name.";
                }
                if(e3.value.length==0)
                { 
                    flag=1;
                    e3.placeholder="Must Enter the Last Name.";
                }
                if(e4.value.length==0)
                { 
                    flag=1;
                    e4.placeholder="Must Enter the Birth Date.";
                }
            }
            return flag==0;
        }

        </script>
        </form>
    	</div>
</body>
</html>

<?php
$globalvar=0;
$usr_id=0;
$usr_fn="";
$usr_ln="";
if(array_key_exists('go', $_POST))
{
    $conn=mysql_connect("localhost","root","localhost");
    $db=mysql_select_db("trysql",$conn);
    $query1="SELECT id,firstname,lastname,password from signup where id='$_POST[user_id]'";
    $result=mysql_query($query1);
    mysql_error();
    $row=mysql_fetch_array($result);
    $err="";
    $globalvar=$_POST['no_of_persons'];
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
        echo "<script>document.getElementById('no_of_persons').value=".$_POST['no_of_persons'].";";
        echo "document.getElementById('user_id').value=".$row['id'].";";
        echo "document.getElementById('user_firstname').value='$usr_fn'; ";
        echo "document.getElementById('user_lastname').value='$usr_ln'; ";
        echo "document.getElementById('user_password').value='$_POST[user_password]'; ";
         echo "showPersons();</script>";
        
    }
    else
    {
        echo "<script>window.alert('ID ".$err." May have been Wrong!!');</script>";
    }
}
else if(array_key_exists('submit_details', $_POST))
{
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
        echo "<script>document.getElementById('person_details').style.display = 'none';
                     document.getElementById('form1').style.display = 'none';</script>"; 
        echo "<div style='font-size:22;font-family:serif;position:relative;top:100px;padding-left:30px;'>";
        echo "<h1 style='color:#F88A3E'>Ticket Booked for Person$i</h1>";
        echo "<h2 style='color:#663EF8'>Person$i Details:</h2><br>";
        // echo "<b style='color:#F83E5B;font-size:30;'>Your ID:  ".$_POST['id']."</b><br>";
        echo "<b style='color:#F83E5B'>Name:</b>  ".$_POST['fname'.$i]." ".$_POST['mname'.$i]." ".$_POST['lname'.$i]."<br><br>";
        echo "<b style='color:#F83E5B'>Birthdate:</b>  ".$_POST['bdate'.$i]."<br><br>";
        echo "</div>"; 

    }
}      
?>
