<html>
    <head>
        <title>Forex</title>
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="Signup.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <style>
            img#bg{
                position: fixed;
                opacity: 0.5;
                z-index: -1;
            }
            body #page-content{
                font-family: 'Merriweather', serif; 
            }
            body #page-content select{
                border-radius: 15px;
                text-align: center;
                align-content: center;
                font-family: 'Merriweather', serif;
                font-size: 26;
                background-color: #BCF9FB;
                color: #FA5893;
                width:300px;
                height: 50px;
            }
            body input{
                width: 300px;
                height: 50px;
                font-family: 'Merriweather', serif;
                font-size: 26;
                background-color: #B6B6FA;
                border-radius: 15px;
            }
            form{
                align-content: center;
                text-align: center;
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
        <div id='page-content'>
        <img id="bg" src="Pictures/WP/wp.jpg">
        <h2 style="text-align:center;font-size:36">Currency Converter</h2>
        <br><br>
        <form method="post" action="forex.php">
            <br><br>
        <select name="country" style="text-align:center">
            <option value="USA" selected="selected">USA</option>
            <option value="Britain">Britain</option>
            <option value="Australia">Australia</option>
            <option value="Japan">Japan</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Qatar">Qatar</option>
            <option value="South Africa">South Africa</option>
        </select>
        <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
        <br><br>
        <select name="amount" style="text-align: center">
            <option value="10000" selected="selected">INR 10000</option>
            <option value="20000">INR 20000</option>
            <option value="25000">INR 25000</option>
            <option value="50000">INR 50000</option>
            <option value="75000">INR 75000</option>
            <option value="100000">INR 100000</option>
        </select><br><br>
        <input type="submit" name="Submit" value="Convert">
    </form>
<?php
$conn=mysql_connect("localhost","root","localhost");
$db=mysql_select_db("trysql",$conn);
$query="SELECT * from forex where Country='$_POST[country]';";
$result=mysql_query($query,$conn);
$row=mysql_fetch_array($result);
echo "<div style='font-size:22;font-family:Merriweather, serif;align-content:center;text-align:center'><br><br>Current Rate of 1.00 ".$row['Currency']." is INR ".$row['Inr'].".<br>";
$x="$_POST[amount]";
$a=(float)$x;
$y=(float)$row['Inr'];
// Float $z;
$z=$a/$y;
echo "<br>You will get ".$z." ".$row['Currency']." for your "."$_POST[amount]"."<br></div>";
?>
    </div>
  </body>
</html>


