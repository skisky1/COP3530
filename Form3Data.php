<?php
/* let firstname = document.forms["registerform"]["firstname"].value;
let lastname = document.forms["registerform"]["lastname"].value;
let address = document.forms["registerform"]["address"].value;
let email = document.forms["registerform"]["email"].value;
let phone = document.forms["registerform"]["phone"].value; */

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $education = $_POST['education'];
  
  /*$english = $_POST["english"];
  $spanish = $_POST["spanish"];
  $french = $_POST["french"];
  $german = $_POST["german"];*/

  echo "Firstname: " . $firstname . " <br>";
  echo "Lastname: " . $lastname . " <br>";;
  echo "Address: " . $address . " <br>";
  echo "Email: " . $email . " <br>";
  echo "Phone: " . $phone . "<br> ";
  echo "Education (Y/N): " . $education . " <br>";

  foreach($_POST["educationfield"] as $efield){
    echo "Education Level: " . $efield . " <br>";
  }

  foreach($_POST["language"] as $language){
    echo "Language: " . $language . " <br>";
  }

  echo "<table style='text-align:center; margin: 0px auto; border: 1;'>";
  echo "<tr> <th> Index </th> <th> Label Hello </th> <th> Label Green Tea </th> </tr>";
  for($i = 2; $i <= 100; $i += 2){
    
      if($i == 2){
        echo "<tr> <th> $i </th> <th> Hello (" . ($i * 2) . ") index*2 </th> <th> Green Tea (" . ($i) . ") </th> </tr>";
      }else{
       echo "<tr> <th> $i </th> <th> Hello (" . ($i * 2) . ")</th> <th> Green Tea (" . ($i) . ") </th> </tr>"; 
      }
  }
  


