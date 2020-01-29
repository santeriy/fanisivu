<?php
session_start();
session_regenerate_id();

$username = "n8yrsa00";
$password = "jerufani";
$database = "Jerusalem";
$host = "localhost";
        
try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $ex) {
    header('location: error.php?error=' . urlencode($ex->getMessage()));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jerusalem</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Etusivu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
           
           
            <?php if (isset($_SESSION['user_account_id'])) {?>
            
             <a class="nav-link inline" href="/logout.php">Kirjaudu ulos&ensp;<i class="fas fa-sign-out-alt"></i></a>
             
            <?php } else {?> 
            
             <a class="nav-link inline" href="/login.php"><ul class="navbar-nav ml-auto"><li class="nav-item">Kirjaudu sisään&ensp;<i class="fas fa-sign-in-alt"></i></li></ul></a>
             
             <?php }?> 

          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Jerusalem</h1>
        <h2 class="masthead-subheading mb-0">jo vuodesta 2008</h2>
        <a href="http://kiekko.tv/teams/team.cws?team=Jerusalem" class="btn btn-primary btn-xl rounded-pill mt-5">Kiekko.tk sivu</a>
      </div>
    </div>
  </header>