<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/c21fbf4e0a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!---Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./Images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/favicon-16x16.png">
    <link rel="manifest" href="./Images/site.webmanifest">
    <!--End Of Favicon-->
    <title>Header</title>
  </head>
  <body>
      <header>
          <nav>
              <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="submit.php">Submit</a></li>
                  <li><a href="array.php">Array</a></li>
                  <li><a href="calculator.php">Calculator</a></li>
                  <li><a href="calender.php">Calender</a></li>
                  <li><a href="switch.php">Switch</a></li>
              </ul>
          </nav>
      </header>

      <?php
        $_SESSION['username'] = "spjontek04";
        echo $_SESSION['username'];
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

