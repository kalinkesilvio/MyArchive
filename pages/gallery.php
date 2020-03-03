<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/gallery.css">
    <title>Gallery</title>
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

    <div class="contentbox">

      <?php
        $handle = fopen('data.csv', 'r');
        $start = TRUE;

        while (($getcsv = fgetcsv ($handle)) !== FALSE) {

            foreach ($getcsv as $key) {


              if ($start == TRUE) {
                $start = FALSE;
              } else {
                foreach ($getcsv as $key) {

                  $csvarray = (explode(";", $key));
                    echo '<div class="content">';
                    echo '<img src="../img/'.$csvarray[2].'" alt="pic" class="pic">';
                    echo '<h3 id="artName">"'.$csvarray[0].'"</h3>';
                    echo '<h4>Künstler: </h4><h4 id="artist">'.$csvarray[1].'</h4>';
                    echo '<img src="../img/heart_white.png" alt="heart" class="heart" onClick="intoCSV">';
                    echo '</div>';
                }
              }
            }
          }
       ?>

       <script type="text/javascript">
         function intoCSV() {

          const fs = require('fs');

          let pic = document.getElementsByClassName('pic');
          let artist = document.getElementById('artist');
          let artName = document.getElementById('artName');

          fs.writeFile("favorites.csv", pic + ";" + artist + ";" + artName);


        }
       </script>

    </div>
  </body>
</html>
