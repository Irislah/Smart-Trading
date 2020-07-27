<?php 
    session_start();
    include_once 'dbh.php';
    $result = mysqli_query($conn,"SELECT * from imge");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainPage</title>
    <link rel="stylesheet" href="./mainpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
</head>

<body>
    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a href="contactus.html">Contact</a>
      <a href="login.html">Login</a>
      <a href="item.html">Sell Stuff</a>

      <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>

    <div class="logo">
        <img src="logo2.png" alt="logo">
    </div>

    <div class="buypart">
        <h2>Classification</h2>
        <ul>
            <li><a href="#">Dormitory Stuff</a></li>
            <li><a href="#">Academics</a></li>
            <li><a href="#">Clothes & Shoes</a></li>
            <li><a href="#">Cosmetics</a></li>
            <li><a href="#">Others</a></li>
        </ul>
    </div>

    <div>
        <h2 class="wrapper" style="margin-top: 20px;">All Goods</h2>
        <br>
        <br>
        <div class="wrapper">
            <a href="item.html"><div class="content">PICTURE</div></a>
            <a href="item.html"><div class="content">PICTURE</div></a>
            <a href="item.html"><div class="content">PICTURE</div></a>
            <a href="item.html"><div class="content">PICTURE</div></a>
            <a href="item.html"><div class="content">PICTURE</div></a>
            <a href="item.html"><div class="content">PICTURE</div></a>
            <a href="#"><div class="content">PICTURE</div></a>
            <a href="#"><div class="content">PICTURE</div></a>
            <a href="#"><div class="content">PICTURE</div></a>
            <?php
                echo "<img src='uploads/profiledefault.jpg' class='content'>";
                echo "<img src='uploads/42b095acfb51feb25bc4b60d9463577b.jpg
' class='content'>";
                echo "<img src='uploads/$result' class='content'>";
                while($row = mysqli_fetch_array($result)) {
                    $filename = $row['filename'];
                    echo "<img src='uploads/profiledefault.jpg'>";
                    echo "<img src='uploads/$filename' class='content'>";
                }
            ?>

        </div>
    </div>

    <br>
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>

</body>
</html>