<?php require_once 'inc/top.php';?>

 

<div class="container-fluid">
  <div class="row test">
<?php

        $username = "n8yrsa00";
        $password = "jerufani";
        $database = "Jerusalem";
        $host = "localhost";
        
        try {
            $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
            
            //print "Tietokannan avaus onnistui";
            
            $sql = "SELECT * FROM pelaajat";
            
            $query = $conn->query($sql);
            $query->setFetchMode(PDO::FETCH_OBJ);
            
            while($row = $query->fetch()) {
                
                print "<div class='col-2 pelaajat'>";
                print "<div class='card' style='width: 18rem; height: 30rem;'>";
				        print "<img class='card-img-top' src='img/". $row->img ."' alt='Card image cap'>";
			        	print "<div class='card-body'>";
			        	print "<h5 class='card-title'>" . $row->Nimi ."</h5>";
			        	print "<p class='card-text'>" . $row->Info . "</p>";
			        	$id = $row->id;
			        	if ($_SESSION['user_account_id'] == '1') {
			        	print "<td><a href='edit.php?id=$id'>Edit</a> <a href='delete.php?id=$id'>Delete</a></td>";}
			        	print "</div></div></div>";
            }
            
          
            
        } catch(PDOException $pdoex) {
            print "Tietokannan avaus epäonnistui " . $pdoex->getMessage();
        }
        
        $conn = null;

?>
    </div>
 </div>
 
  <p hidden>This paragraph should be hidden.</p>

<?php if ($_SESSION['user_account_id'] == '1') {?>
 
 <center>
 <a href="new.php" class="btn btn-primary btn rounded-pill mt-5 lisays">Lisää pelaaja!</a>
</center>

<?php }?>
 




<?php require_once 'inc/bottom.php';?>