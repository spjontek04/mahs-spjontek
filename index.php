 
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
    <title>Home</title>
  </head>
  <body>

  <h1>Welcome Coach B</h1>
  <br>
  <h2>Come check out these dope pages:</h2>
  <?php
    include "header.php";
  ?>

  <?php
    echo $_POST['name'];
  ?>
  
    
 

  <form method="POST">
    <input type="hidden" name="name" value="Steven">
    <button type="submit">Press Me for Name</button>
  </form>
    
    

  <?php
    setcookie("name", "Steven", time() - 48);
  ?>

  <?php 
    include_once 'footer.php';
  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>








