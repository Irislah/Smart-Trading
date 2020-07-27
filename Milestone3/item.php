<?php
    session_start();
    include_once 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainPage</title>
    <link rel="stylesheet" href="item.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
</head>

<body>
    <div class="topnav">
      <a class="active" href="mainpage.html">Home</a>
      <a href="aboutus.html">About</a>
      <a href="contactus.html">Contact</a>
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

<!--     <div class="picture">PICTURE</div>

    <div class="buypart">
        <h2>Price: $??? </h2>
        <ul>
            <li style="font-size: 25px; margin: 10px;"><a href="tel:91214304">Contact Owner by Phone</a></li>
            <li style="font-size: 25px; margin: 10px;"><a href="email:e0376986@u.nus.edu">Contact Owner by Email</a></li>
        </ul>
    </div> -->

    <div>
        <h2 class="wrapper" style="margin-top: 20px;">SELL STUFF</h2>
        <br>
        <br>
        <div class="wrapper">
<!--             <a href="item.html"><div class="content">PICTURE</div></a>
            <a href="#"><div class="content">PICTURE</div></a>
            <a href="#"><div class="content">PICTURE</div></a> -->
            <p class="clear"></p>
            <a href="#"><div class="description">
<?php
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
            $resultImg = mysqli_query($conn, $sqlImg);
            while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                echo "<div class='user-container'>";
                if($rowImg['status'] == 0) {
                    echo "<img src='uploads/profile".$id.".jpg'>";
                }else {
                    echo "<img src='uploads/profiledefault.jpg'>";
                }
                echo "<p>".$row['username']."</p>";
                echo "</div>";
            }
        }
    } 

    if(isset($_SESSION['id'])) {
        if($_SESSION['id'] == 1) {
            echo "You are logged in as a user! You can upload images now!";
        }
        echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
            <input type='file' name='file'>
            <button type='submit' name='submit'>UPLOAD</button>
        </form>";

        echo "Click here to logout!";
        echo "<form action='logout.php' method='POST'>
     <button type='submit' name='submitLogout'>Logout</button>
     </form>";


    } else {
        echo "You are not logged in! <br>";
        echo "Login as a user!";
        echo "<form action='login.php' method='POST'>
        <input type='text' name='name' placeholder='Username'>
        <input type='password' name='pwd' placeholder='Password'>
        <button type='submit' name='submitLogin'>Login</button>
    </form>";

    }
?>
        </div></a>
        </div>
    </div>

</body>
</html>