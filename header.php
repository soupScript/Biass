<?php
if (isset($_POST['submit1'])){
  header("Location: fr.php");
}
if (isset($_POST['submit2'])){
  header("Location: fl.php");
}
if (isset($_POST['submit3'])){
  header("Location: fc.php");
}
?>


<!DOCTYPE html>

<meta charset="UTF-8">

<body style="background-color:#d0503e">
  <h1 style="color:white; font-size:40px; font-family:Arial">Biass🍑</h1>
  <h1 style="color:white; font-size:20px; font-family:Arial">Your path to a more biased life</h1>
  <form action="header.php" method="post">
    <input type="submit" name="submit1" style="width:100px; height:25px; background-color:indianred; border-radius:10px; border-color:palevioletred; font-family:Arial; font-weight:bold; color:white; display:inline " value="For Rightists">

    <input type="submit" name="submit2" style="width:100px; height:25px; background-color:indianred; border-radius:10px; border-color:palevioletred; font-family:Arial; font-weight:bold; color:white; display:inline " value="For Leftists">

    <input type="submit" name="submit3" style="width:100px; height:25px; background-color:indianred; border-radius:10px; border-color:palevioletred; font-family:Arial; font-weight:bold; color:white; display:inline " value="For Centrists">
  </form>
  <hr style="color:white; height:4px; border-width:5px">

</body>