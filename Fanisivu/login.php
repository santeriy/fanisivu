<?php
require_once 'inc/top.php';

$username = "n8yrsa00";
$password = "jerufani";
$database = "Jerusalem";
$host = "localhost";


if ($_SERVER['REQUEST_METHOD']  === 'POST') {
    
     $email = filter_input(INPUT_POST, 'email');
     $pass_input = filter_input(INPUT_POST,'password');
     
     $sql = "select userid, password from user_account where email='$email'";
     
     $statement = $db->query($sql);
     if ($statement) {
         $user_account = $statement->fetch();
         if($user_account) {
            if (password_verify($pass_input,$user_account['password'])){ 
            $_SESSION['user_account_id'] = $user_account['userid'];
            header('location:index.php');
            exit;
            } else {
             print "<div class='alert alert-danger' role='alert'>Väärä sähköpostiosoite tai salasana.</div>";
            }
         }
         else {
             print "<div class='alert alert-danger' role='alert'>Väärä sähköpostiosoite tai salasana.</div>";
         }
     }
     else {
         print "<div class='alert alert-danger' role='alert'>Virhe tietojen hakemisessa.</div>";
     }
}
?>


<div class="container middle kirjaudu">
    <div class="row">
<div class="text-center col-lg-6 col-12 middle bg-light">
    <form class="form-signin" action="<?php $_SERVER['PHP_SELF']?>" method="post">
      <h1 class="font-titillium">Fanisivu</h1>
      <h1 class="h3 mb-3 font-weight-normal">Kirjaudu sisään</h1>
      <div class="form-group">
          <label>Sähköpostiosoite</label>
          <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Sähköpostiosoite" required autofocus>
      </div>
      <div class="form-group">
          <label>Salasana</label>
          <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Salasana" required>
      </div>
      <button class="btn btn-lg btn-primary" type="submit">Kirjaudu sisään</button>
          <p><br><a href="register.php">Rekisteröidy</a></p>
      <p class="mt-5 mb-3 text-muted">&copy; <?php echo date("Y"); ?></p>
    </form>
</div>
</div>
</div>

<?php require_once 'inc/bottom.php';?>
