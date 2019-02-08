<?php

//Step1
 $db = mysqli_connect('localhost','salim','Surmene61','mvc')
 or die('Error connecting to MySQL server.');



//Step2
  $query = "SELECT * FROM interview WHERE id = 3";
    mysqli_query($db, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($db, $query);


while ($row = mysqli_fetch_array($result)) {
  echo '<h4>' . $row['vraag'] . ' ' . $row['antwoord'] . '</h4>' . '<br />';
}

?>

<div class="">
  <h1>presentatie bedrijf</h1>

</div>
