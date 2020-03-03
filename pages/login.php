<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>

    <style media="screen">

      html, body {
        margin: 0 auto;
        padding: 0 auto;
        font-family: Arial;
      }

      #loginbox {
        background-color: #fce2db;
        max-width: 30%;
        max-height: 70%;
        padding: 2%;
        border-radius: 20px;
        margin-top: 5%;
      }

      input[type=text], input[type=password] {
        width: 50%;
        padding: 5px;
        margin: 5px;
        border-color: #ffb6b9;
      }

      input[type=Submit] {
        background-color: #f1c6d3;
        border-style: none;
        border-radius: 5px;
        padding: 10px 15px 10px 15px;
        transition: 1s;
      }

      input[type=Submit]:hover {
        background-color: #6e5773;
        transition: 1s;
      }
    </style>

  </head>
  <body>
    <center>
    <?php

      session_start();

      if (isset($_POST['username']) && $_POST['username'] != ""
          && isset($_POST['password'])) {

          if ($_POST['username'] == "user"
              && md5($_POST['password']) == "e8636ea013e682faf61f56ce1cb1ab5c") {

              $_SESSION['username'] = $_POST['username'];
              $_SESSION['eingeloggt'] = true;
              echo "<p>einloggen erfolgreich</p>";
              header("Location: ./favorites.php");
          } else {
              echo "<div id='loginbox'>";
              echo "<h1>Before getting started,</h1>";
              echo "<h2>Please log in!</h2>";
              echo '<form name="" action="" method="POST" enctype="text/html">';
              echo '<input type="text" name="username" id="text"
                    size="20" maxlength="50" placeholder="Username" />';
              echo "<br>";
              echo '<input type="password" name="password" id="passwd"
                    size="20" maxlength="50" placeholder="Password" />';
              echo '<p><input type="Submit" name="login" value="Submit" />';
              echo '</form>';
              echo "<b>ungültige Eingabe</b>";
              echo "</div>";
              $_SESSION['eingeloggt'] = false;
          }
      } else {
          echo "<div id='loginbox'>";
          echo "<h1>Before getting started,</h1>";
          echo "<h2>Please log in!</h2>";
          echo '<form name="" action="" method="POST" enctype="text/html">';
          echo '<input type="text" name="username" id="text"
                size="20" maxlength="50" placeholder="Username" />';
          echo "<br>";
          echo '<input type="password" name="password" id="passwd"
                size="20" maxlength="50" placeholder="Password" />';
          echo '<p><input type="Submit" name="login" value="Submit" />';
          echo '</form>';
          echo "</div>";

      }

     ?>
   </center>

  </body>
</html>
