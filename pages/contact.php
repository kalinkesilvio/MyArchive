<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>

    <style media="screen">
    html, body {
      padding: 0;
      margin: 0;
      font-family: Arial;
    }

    nav {
      width: 100%;
      height: 100px;
      background-color: white; /*#00FECA*/
    }

    nav h1 {
      font-size: 40px;
      margin-left: 20px;
      margin-top: 0px;
      position: absolute;
    }

    nav .navcontent {
      float: right;
      font-size: 20px;
      margin-top: 20px;
      padding: 0px 40px 0px 40px;
      transition: 0.3s;
    }

    .navbar a {
      color: black;
    }

    .navbar {
      margin-right: 200px;
    }

    .navbar #home:hover {
      background-color: #F012BE;
      color: white;
      transition: 0.3s;
    }

    .navbar #fav:hover {
      background-color: #01FF70;
      color: white;
      transition: 0.3s;
    }

    .gradient {
      height: 100vh;
      background-image: linear-gradient(white, #be9fe1);
    }

    .container {
      height: 180px;
      width: 320px;
      background-color: #c9b6e4;
      position: fixed;
      margin-top: 10%;
      margin-left: 30%;
      z-index: 1;
    }

    #box2 {
      margin-top: 22%;
      margin-left: 40%;
      background-color: #e1ccec;
    }

    .pictures {
      height: 60px;
      width: 60px;
      margin: 5%;
    }

    #art1 {
      width: 10%;
      position: fixed;
      margin-top: 18%;
      margin-left: 23%;
      z-index: 2;
    }
    </style>
  </head>
  <body>
    <nav>
      <h1>My<br><strong>Archive.</strong></h1>

      <div class="navbar">

        <a href="./login.php">
        <div id="fav" class="navcontent">
            <h3>Favorites</h3>
        </div>
        </a>

        <a href="../index.html">
        <div id="home" class="navcontent">
            <h3>Home</h3>
        </div>
        </a>

      </div>
    </nav>

    <div class="gradient">
      <img src="../img/art1.jpg" alt="" id="art1">
      <center>
        <div id="boxes">

            <div id="box1" class="container">
                <h2>Contact us via E-Mail</h2>
                <img src="../img/email.png" alt="" height="60px" width="60px">
            </div>
            <div id="box2" class="container">
                <h2>Find us on Social Media</h2>
                <img src="../img/instalogo.png" alt="" class="pictures">
                <img src="../img/Pinterest-logo.png" alt="" class="pictures">
                <img src="../img/facebooklogo.png" alt="" class="pictures">
            </div>
        </div>
    </center>

    </div>


  </body>
</html>
