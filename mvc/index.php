<?php

define('APP_ROOT', __DIR__);
define('BASE_URL', 'http://localhost/mvc/');
define('MODEL', APP_ROOT.'/admin/model/');
define('VIEW', APP_ROOT.'/admin/view/');
define('CONTROLLER', APP_ROOT.'/admin/controller/');

require_once(VIEW . 'header.php');
require_once(MODEL . 'main.php');
require_once(VIEW . 'footer.php');



/*Step1
 $db = mysqli_connect('localhost','salim','Surmene61','mvc')
 or die('Error connecting to MySQL server.');

//Step2
  $query = "SELECT * FROM interview WHERE id = 1";
    mysqli_query($db, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
 echo $row['vraag'] . ' ' . $row['antwoord'] .'<br />';
}   */

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./style.css">

    <title></title>
  </head>
  <body>

  </body>
</html>
