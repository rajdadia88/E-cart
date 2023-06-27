<?php

session_start();
error_reporting(0);
include('header.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style type="text/css">



body {
  margin: 0px;
  background: url(img/top_bg.gif);
  background-repeat: repeat-x;
  font-family: Verdana, Arial, sans-serif;
        font-size: 16px;
}

p {
  line-height: 17px;
  margin: 11px 0 10px 0;
  padding: 0px;
}

h2 {
  color: #4b5055;
  margin:0px;
  padding:0px;
  font-size: 15px;
}

ul {
  font-size: 15px;
  margin:0;
  padding:0;
}

a {
  color: #004eff;
}

a:hover {
  text-decoration: none;
}

blockquote{
  background: #F7FDE3;
  color: #606060;
  padding: 10px;
}





#wrap {
       margin-left: auto;
       margin-right: auto;
       width: 1100px;
}

#content {
  width: 100%;
  margin-top:30px;
}

#content h2 {
  margin: 0;
  padding: 10px 0 10px 0;
}


/**** Content ***/


#left ul {
  padding: 15px 0 15px 35px;
  margin:0;
}

#left li {
  margin-bottom:5px;
}

#left {
  width: 100%;
  float:left;
  display: block;
  margin-left: 20px;
  display: inline;
}


</style>
</head>

<body>
<div id="wrap">

  <div id="content">
    <div id="left">
      <h2>Shipping and Delivery</h2>
      <p>Where's My Product</p>
      <ul>
        <li><a href="track-orders.php">Track Your Product.</a></li>
      </ul>
      <h2>Shipping Rates & Times</h2>
      <p>Shipping Speeds and Charges</p><br><br>
      <img src="logo/GUID-AB796A7D-97BD-4066-9A61-41E59DB6A8E7_en-IN.png">

      <h2>General Shipping Information</h2>
      <p>Delivery Options</p>
      <ul>
      <li>Secured Delivery with One-Time Password Secured Delivery with Tamper-evident Packaging Do Not Disturb Delivery</li>
      </ul>

    </div>

  </div>
 
</div>

</body>

</html>
