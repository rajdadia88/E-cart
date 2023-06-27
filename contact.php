<?php

session_start();
error_reporting(0);
include('header.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 100%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>

  <p style="text-align: justify; font-size: 16px; font-family: initial;">E-cart is known as an electronic cart the e cart is useful to purchase electronic items. 
The e-cart is easy to use because of search icon and you can easily find whatever you 
want, e-cart is provide category-based items i: e- if you want to purchase mobile phone 
you can search mobile and you get list of mobiles, price, specification, comparison etc.</p>

<p style="text-align: justify; font-size: 16px; font-family: initial;">The e-cart interface is based on search activity if you like product you can add in cart 
option then your cart items collect on cart menu then whatever you want to purchase 
just click on purchase button and that’s it. E -cart is provide user profile facility it means 
user easily find their personal information.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column" style="text-align:center;">
    <div class="card">
      <div class="container">
        <h2>Anand Bhakkad</h2>
        <p class="title">Enrollment No.: 196250307003</p>
        <p>Email: anandbhakkad@gmail.com</p>
        <p><button class="button" style="width: 200px ; "><a href="https://www.google.com/gmail/about/">Contact</a></button></p>
      </div>
    </div>
  </div>
 <div class="column" style="text-align:center;">
    <div class="card">
      <div class="container">
        <h2>Raj Dadia</h2>
        <p class="title">Enrollment No.: 196250307011</p>
        <p>Email: rajdadia88@gmail.com</p>
        <p><button class="button" style="width: 200px ; "><a href="https://www.google.com/gmail/about/">Contact</a></button></p>
      </div>
    </div>
  </div>
 <div class="column" style="text-align:center;">
    <div class="card">
      <div class="container">
        <h2>Arman Nagariya</h2>
        <p class="title">Enrollment No.: 196250307043</p>
        <p>Email: armannagariya@gmail.com</p>
        <p><button class="button" style="width: 200px ; "><a href="https://www.google.com/gmail/about/">Contact</a></button></p>
      </div>
    </div>
  </div>
  <div class="column" style="text-align:center;">
    <div class="card">
      <div class="container">
        <h2>Harsh Vaghariya</h2>
        <p class="title">Enrollment No.: 196250307070</p>
        <p>Email: harshvaghariya@gmail.com</p>
        <p><button class="button" style="width: 200px ; "><a href="https://www.google.com/gmail/about/">Contact</a></button></p>
      </div>
    </div>
  </div>
  


  
</div>
<?php
include('footer.php');
?>
</body>
</html>
