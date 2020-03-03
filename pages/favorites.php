<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="../style/favorites.css"> -->
    <title>Favorites</title>

    <style media="screen">

    html, body {
      padding: 0;
      margin: 0;
      font-family: Arial;
    }

    nav {
      width: 100%;
      height: 100px;
      background-color: white;
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

    .picture {
      margin: 0 auto;
      margin-bottom: -4px;

    }

    .picandcaption {
      max-width: 40%;
    }

    .bigCaption {
      font-family: cursiveLightFont;
      margin: 0 auto;
      background-color: black;
      color: white;
      padding: 10px;
      width: 100%;
      z-index: 1;
    }

    .loginout {
      float: right;
      max-width: 10%;
      max-height: 20%;
      margin-right: 40px;
      background-color: #be9fe1;
      border-radius: 5px;
      padding: 20px;
    }

    .loginout input[type=Submit] {
      background-color: #f1f1f6;
      border: none;
      padding: 10px 5px 10px 5px;
      justify-content: center;
    }

    .textboxes {
      background-color: #e1ccec;
      padding: 20px;
      max-width: 30%;
      border-style: solid;
      border-width: 2px;
      float: right;
    }

    .dataBody {
      margin-top: 40px;
    }

    .infos {
      margin-left: 30px;
      background-color: #f1d4d4;
      padding: 20px;
      max-width: 30%;
    }

    #textbox1 {
      margin-top: -380px;
      margin-right: 362px;
    }

    #textbox2 {
      margin-top: -580px;
      margin-right: 250px;
    }

    @font-face {
      font-family: cursiveFont;
      src: url(../Demo_fonts/Fontspring-DEMO-sofiapro-regularitalic.otf);
    }

    @font-face {
      font-family: cursiveLightFont;
      src: url(../Demo_fonts/Fontspring-DEMO-sofiapro-ultralightitalic.otf);
    }

    .text p {
      font-family: cursiveFont;
    }

    </style>
  </head>
  <body>
    <nav>
      <h1>My<br><strong>Archive.</strong></h1>

      <div class="navbar">

        <a href="../index.html">
        <div id="home" class="navcontent">
            <h3>Home</h3>
        </div>
        </a>

      </div>
    </nav>

    <div class="dataBody">

    <div class="loginout">

        <?php

        session_start();

        $name = $_SESSION['username'];

        if (isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == true) {
             echo "<h2>Welcome, $name!</h2>";
             echo '<form name="" action="" method="POST" enctype="text/html">';
             echo '<p><input type="Submit" name="logout" value="Ausloggen" />';
             echo '</form>';
        }

        if (isset($_POST['logout'])){
            echo "Logged out!";
            echo "<br>";
            session_destroy();
            $_SESSION = array();
            echo "destroyed session!";
        }

       ?>
    </div>
    <div class="picandcaption">
      <div class="picture">
        <img src="../img/starrynight.jpg" alt="starrynight" width="100%">
      </div>
      <div class="bigCaption">
        <h1>The Starry Night</h1>
      </div>
    </div>

    <div class="infos">

        <h2>1889</h2>
        <h3>Oil on canvas</h3>
        <h3>73,7 x 91,1 cm</h3>
        <h3>Museum of Modern Art, New York (USA)</h3>

    </div>
    <div class="text">
      <div id="textbox1" class="textboxes">

      <p>Painted in June 1889, it describes the view from the east-facing window of his
        asylum room at Saint-Rémy-de-Provence, just before sunrise, with the addition of
        an ideal village. It has been in the permanent collection of the Museum
        of Modern Art in New York City since 1941, acquired through the Lillie P. Bliss Bequest.
        Regarded as among Van Gogh's finest works, The Starry Night is one of the most recognized
        paintings in the history of Western culture.</p>
      </div>
       <br>
      <div id="textbox2" class="textboxes">

        <p>Although The Starry Night was painted during the day in Van Gogh's ground-floor studio, it would be inaccurate
          to state that the picture was painted from memory. The view has been identified as the
          one from his bedroom window, facing east,a view which Van Gogh painted variations of no fewer than
           twenty-one times, including The Starry Night.</p>
        </div>
    </div>

    <div class="artistinfos">

    </div>
  </div>


  </body>
</html>
