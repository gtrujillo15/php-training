<?php
error_reporting(E_ALL);
require_once('nav.php');
require_once('content.php');
require_once('functions.php');
$loggedin = False;
$firstName = $_POST["firstname"] ?? "";
$lastName = $_POST["lastname"] ?? "";
?>
<html>
<head></head>
<body>
  <nav>
    <?php makeNav($myNav, $loggedin); ?>
  </nav>
  <section>
    <div>
        <?php
          makeContent($myContent,0);
          echo 'Hello ' . $firstName . ' ' . $lastName;
        ?>
    </div>
  </section>
  <section>
    <form class="" action="contact.php" method="post">
      <p>First Name: <input type="text" name="firstname" value="<?php echo $firstName; ?>"></p>
      <p>Last Name: <input type="text" name="lastname" value="<?php echo $lastName; ?>"></p>
      <input type="submit" name="" value="Submit">
    </form>
  </section>
</body>
</html>