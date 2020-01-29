<?php require_once 'inc/top.php';?>

<?php

    // lue mikä asiakas (=astunnus) pitää poistaa?

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    
        $username = "n8yrsa00";
        $password = "jerufani";
        $database = "Jerusalem";
        $host = "localhost";
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);

        $sql = "DELETE FROM pelaajat WHERE id = :id";
        
        $query = $conn->prepare($sql);
        $query->bindValue(":id", $id, PDO::PARAM_STR);
        
        $query->execute();
        
        print "<div class='container poisto'><h3 class>Pelaaja ID $id poistettu.</h3>";
        
        print "<a href='pelaajat.php'>Takaisin</a></div>";
        
    } catch(PDOException $pdoex) {
        print "Tietokannan avaus epäonnistui " . $pdoex->getMessage();
    }
    
    $conn = null;
?>

