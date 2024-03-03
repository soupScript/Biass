<?php

if(isset($_COOKIE['gotos'])){
  if ($_COOKIE['gotos'] == "fr"){
    header("Location: fr.php");
  }elseif ($_COOKIE['gotos'] == "fl"){
    header("Location: fl.php");
  }elseif ($_COOKIE['gotos'] == "fc"){
    header("Location: fc.php");
  }
}
  include("header.php");


?>

<!DOCTYPE html>
<title>
  Biass
</title>


