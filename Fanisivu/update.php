<?php require_once 'inc/top.php';?>

<?php

    $nimi = filter_input(INPUT_POST, 'nimi', FILTER_SANITIZE_STRING);
    $info = filter_input(INPUT_POST, 'info', FILTER_SANITIZE_STRING);
    $img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);
    
    
        $username = "n8yrsa00";
        $password = "jerufani";
        $database = "Jerusalem";
        $host = "localhost";
    
   
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);

        $sql = "UPDATE pelaajat SET nimi = :nimi, info = :info, img = :img
        WHERE nimi = :nimi";
        
        $query = $conn->prepare($sql);
        $query->bindValue(":nimi", $nimi, PDO::PARAM_STR);
        $query->bindValue(":info", $info, PDO::PARAM_STR);
        $query->bindValue(":img", $img, PDO::PARAM_STR);
        
        $query->execute();
        
        print "<div class='poisto'><h3>Tiedot tallennettu onnistuneesti</h3>";
        
        print "<a href='pelaajat.php'>Takaisin</a></div>";
        
    } catch(PDOException $pdoex) {
        print "Tietokannan avaus epäonnistui " . $pdoex->getMessage();
    }
    
    $conn = null;

?>

