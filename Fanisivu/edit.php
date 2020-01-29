<?php require_once 'inc/top.php';?>

<?php
        $username = "n8yrsa00";
        $password = "jerufani";
        $database = "Jerusalem";
        $host = "localhost";
        
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        
        try {
            $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
            
          
            
            $sql = "SELECT * FROM pelaajat WHERE id = '$id'";
            
            $query = $conn->query($sql);
            $query->setFetchMode(PDO::FETCH_OBJ);
        
        while($row = $query->fetch()) {
           
            $nimi = $row->Nimi;
            $info = $row->Info;
            $img = $row->img;
        }
        
    } catch(PDOException $pdoex) {
        print "Tietokannan avaus epäonnistui " . $pdoex->getMessage();
    }
    
    $conn = null;
?>

<div class="container">

            <h4 class="mb-3">Muokkaa tietoja:</h4>
            <form id="asiakastiedot" class="needs-validation" action="update.php" method="POST" validate>
                <div class="row">
                  <div class="col-md-5 mb-3">
                    <label for="firstName">Pelaajan nimi</label>
                    <input type="text" class="form-control" id="nimi" name="nimi" placeholder="" value="<?php print $nimi?>" >
                  </div>
                  <div class="col-md-5 mb-3">
                    <label for="Asiakasnimi">Infoteksti</label>
                    <input type="text" class="form-control" id="info" name="info" placeholder="" value="<?php print $info?>" >
                  </div>
                  <div class="col-md-2 mb-3">
                    <label for="asvuosi">Kuvatiedoston nimi</label>
                    <input type="text" class="form-control" id="img" name="img" placeholder="" value="<?php print $img?>" >
                  </div>                  
                   <input type="button" id="new" class="uusi" value="Tallenna" />
            
            </div>
            </form>
            </div>
<?php require_once 'inc/bottom.php';?>