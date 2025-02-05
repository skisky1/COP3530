<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Cernogorsky Labs </title>
    <link rel="stylesheet" href="Cernogorsky_Assignment4.css" type="text/css">
  </head>
    <body>
      <ul id="navbar">
        <li> <a href="index.php"> Homepage </a> </li>
        <li> <a href="Cernogorsky_Assignment1.php"> Assignment 1 </a></li>
        <li> <a href="Cernogorsky_Assignment2.php"> Assignment 2 </a> </li>
         <li> <a href="Cernogorsky_Assignment3.php"> Assignment 3 </a> </li>
      </ul>
      <img src="https://media.npr.org/assets/img/2024/01/29/gettyimages-1244448861_wide-b074ca73cffcf2f5f2ecc16bf627a4df9c79d61e.jpg" alt="clinc welcome!" height="500" width="600">
      <?php
      echo "<br>";
      echo $_SESSION["username"];
      ?>

      <p> Starting on ketamine can be a long and interesting journey, it is generally advised that those suffering from certain psychatric conditions, primarily schizophrenia, refrain from subjecting themselves to this medicine, as it may have adverse effects. Generally when dosing, it is recommended to do at least these 3 things:</p>
  <ol>
    <li>
      <h3> Set time for yourself </h3>
      <p> this can generally be a tricky process, but can be achieved through:</p>
        <ul>
          <li> Wearing headphones </li>
          <li> Sitting comfortably, in an environment free of distractions </li>
          <li> Setting 30 minutes aside for the troche to take effect </li>
        </ul>
    </li>
    <li> 
      <h3> Relax, as this can take awhile </h3>
      <p> our understanding of perspective changes drastically when applying therapy, it important to bare a few things in mind</p>
      <ul>
        <li> This isn't forever </li>
        <li> Psychological resistance is usually a sign of repression </li>
        <li> It is okay to get better </li>
      </ul>
      </li>
        <li>
          <h3> Jot down your thoughts </h3>
          <p> this may be the most underrated process in the entire therapy, but remembering how you felt during CBT is crucial to excelling. Remember that: </p>
          <ul>
            <li> It is okay to reach out to us for assistance </li>
            <li> we all get better with time </li>
            <li> "Rome wasn't built in a day" </li>
          </ul>
        </li>
      </ol>
        <p> Have a wonderful day! </p>
  
      <a href="logoff.php"> Logoff </a>
      
     
</html>