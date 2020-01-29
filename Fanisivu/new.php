<?php require_once 'inc/top.php';?>

<div class="container">

            <h4 class="mb-3">Lisää pelaaja:</h4>
            <form id="asiakastiedot" class="needs-validation" action="save.php" method="POST" validate>
                <div class="row">
                  <div class="col-md-5 mb-3">
                    <label for="firstName">Pelaajan nimi</label>
                    <input type="text" class="form-control" id="nimi" name="nimi" placeholder="" value="" >
                  </div>
                  <div class="col-md-5 mb-3">
                    <label for="Asiakasnimi">Infoteksti</label>
                    <input type="text" class="form-control" id="info" name="info" placeholder="" value="" >
                  </div>
                  <div class="col-md-2 mb-3">
                    <label for="asvuosi">Kuvatiedoston nimi</label>
                    <input type="text" class="form-control" id="img" name="img" placeholder="" value="" >
                  </div>                  
                   <input type="button" id="new" class="uusi" value="Lisää" />
            
            </div>
            </form>
            </div>

<?php require_once 'inc/bottom.php';?>