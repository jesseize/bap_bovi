<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <title>BAP Opdracht 1</title>
  </head>
  <body>
    <?php if(isset($_POST['submit'])) {
      // Send confirmation mail
      $to = $_POST['email'];
      $subject = 'Account Creation';
      $msg = "Hello ".$_POST['fname']." ".$_POST['lname'].", your account has been created.
      You registered with the data : \r\n Name: ".$_POST['fname']." ".$_POST['lname']."
      Username: ".$_POST['user']."\r\n E-mail: ".$_POST['email']." \r\n Password: hidden for safety purposes.";
      $from = '23215@ma-web.nl';
      mail($to, $subject, $msg, 'From: ' . $from);

      // Add to DB
      $db = new PDO("mysql:dbname=bap;host=localhost","root","");
      $dbh = $db->prepare("INSERT INTO opdracht_1 (fname,lname,email,password,username) VALUES (:fname,:lname,:email,:password,:username)");
      $dbh->execute(array(":fname" => $_POST['fname'],":lname" => $_POST['lname'],":email" => $_POST['email'],":password" => md5($_POST['password']),":username" => $_POST['user']));
    ?>
      <h1>Account created.</h1>
      <p>A verification e-mail has been sent.</p>
    <?php } else { ?>
    <form method="post" action="#">
      <input type="text" id="fname" placeholder="First name" name="fname" />
      <input type="text" id="lname" placeholder="Last name" name="lname" />
      <input type="text" id="username" placeholder="Username" name="user" />
      <input type="email" id="email" placeholder="Email" name="email" />
      <input type="email" id="confirmemail" placeholder="Confirm Email" name="confirmemail" />
      <input type="password" id="passwd" placeholder="Password" name="passwd" />
      <input type="password" id="confirmpasswd" placeholder="Confirm Password" name="confirmpasswd" />
      <button type="submit" value="Create Account" name="submit">Create Account</button>
      <a href="opdracht_1.zip" download>Download code</a>
    </form>
    <?php } ?>
  </body>
</html>
