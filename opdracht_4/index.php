<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Opdracht 4</title>
   </head>
   <body>
      <body>
         <h3>Stringhandler opdracht | Jesse Izeboud MD1A</h3>
         <form method="GET" action="">
            <input type="text" name="input" placeholder="String">
            <input type="submit" id="submit" name="submit" value="submit">
         </form>
         <?php if (!isset($_GET['input'])) { ?>
         <hr>
         <ul>
            <li>De lengte van inputstring  is: 0  characters</li>
            <li>Zoeken naar spaties. Er zit een spatie op positie: </li>
            <li> Zoeken naar aantal spaties. Er zitten x spaties in: 0
            </li>
            <li>Wijzig de eerste letter van string 3 naar hoofdletter: </li>
            <li>Alles in hoofdletters:  </li>
            <li>De input is precies gelijk aan 'Hello World': no  </li>
            <li>De input is gelijk aan 'Hello World' of 'hello world' of HELLO WORLD', etc.: no  </li>
         </ul>
         <?php } ?>
         <?php if (isset($_GET['input']) && $_GET['input'] != "") {
           $str = $_GET['input'];
         ?>
         <hr>
         <ul>
            <li>De lengte van inputstring  is: <?php echo strlen($str); ?>  characters</li>
            <li>Zoeken naar spaties. Er zit een spatie op positie: <?php echo strpos($str,' '); ?></li>
            <li>Zoeken naar aantal spaties. Er zitten x spaties in: <?php echo substr_count($str, ' '); ?></li>
            <li>Wijzig de eerste letter van string naar hoofdletter: <?php echo ucfirst($str); ?></li>
            <li>Alles in hoofdletters:  <?php echo strtoupper($str); ?></li>
            <li>De input is precies gelijk aan 'Hello World': <?php if($str == 'Hello World') { echo 'yes'; } else { echo 'no'; }?></li>
            <li>De input is gelijk aan 'Hello World' of 'hello world' of HELLO WORLD', etc.: <?php if(strtolower($str) == 'hello world') { echo 'yes'; } else { echo 'no'; }?>  </li>
         </ul>
         <?php } ?>
   </body>
</html>
