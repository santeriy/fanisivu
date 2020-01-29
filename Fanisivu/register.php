<?php
require_once 'inc/top.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST,'email');
    $password = password_hash(filter_input(INPUT_POST,'password'),PASSWORD_DEFAULT);

    try { 
        
        $sql = "insert into user_account (email, password) values (:email,:password)";
        $statement = $db->prepare($sql);
        $statement->bindValue(':email',$email,PDO::PARAM_STR);
        $statement->bindValue(':password',$password,PDO::PARAM_STR); 
        $statement->execute();
        header('location:login.php');
        exit;
    } catch (Exception $ex) 
        { 
        print "<div class='alert alert-danger' role='alert'>Virhe rekisteröinnissä." . $ex->getMessage() . "</div>";
    }
} 
?> 
<main class="container row middle">
<div class="text-center col-lg-6 col-12 middle bg-light paddy roundy">
    <h1 class="font-titillium">VILJA</h1>
    <h1 class="h3 mb-3 font-weight-normal">Rekisteröidy</h1>
    
    <form action="<?php print $_SERVER['PHP_SELF']?>" method="post" enctype-"multipart/form-data">
        <div class="form-group">
            <label>Sähköpostiosoite</label>
            <input type="email" class="form-control" name="email" placeholder="Sähköpostiosoite" id="email" required autofocus>
        </div>
        <div class="form-group">
            <label>Salasana</label>
            <input type="password" class="form-control" name="password" placeholder="Salasana" required>
        </div>
        <small class="form-text text-muted">Emme jaa tietojasi ulkopuolisten tahojen kanssa.</small><br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="terms" required>
            <label class="form-check-label" for="terms">Hyväksyn palvelun käyttöehdot.</label>
        </div>
    <button class="btn btn-lg btn-primary" type="submit">Rekisteröidy</button>
    <p><br><a href="login.php">Kirjaudu sisään</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; <?php echo date("Y"); ?></p>
    </form>
</div>
</main>
<?php require_once 'inc/bottom.php';?>