<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <title> Register User </title>
    <style>
      body{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div style="text-align: left">
      <a href="index.php"> Home </a> <br> 
      <a href="Cernogorsky_Assignment1.php"> Assignment 1 </a> <br>
      <a href="Cernogorsky_Assignment2.php"> Assignment 2 </a> <br>
    </div>
    <img src="https://images.cooltext.com/5713100.png" style="text-align:center;" alt="Cernogorsky Labs Logo">
    <script>
      function validateForm(){
        let firstname = document.forms["registerform"]["firstname"].value;
        let lastname = document.forms["registerform"]["lastname"].value;
        let address = document.forms["registerform"]["address"].value;
        let email = document.forms["registerform"]["email"].value;
        let phone = document.forms["registerform"]["phone"].value;
        let education = document.forms["registerform"]["education"].value;
        let educationField = document.getElementById("educationfield");
        let languageArray[] = documents.form["registerform"]["language"].value;
       
        if(firstname == ""){
          alert("form must be filled out completely, please!")
          return false;
        }
        if(lastname == ""){
          alert("form must be filled out completely, please!")
          return false;
          }
        if(address == ""){
          alert("form must be filled out completely, please!")
          return false;
          } 
        if(email == ""){
          alert("form must be filled out completely, please!")
          return false;
          } 
        if(phone == ""){
          alert("form must be filled out completely, please!")
          return false;
          }
       
      
      }
      
     
    </script>
    <form name="registerform" action="Form3Data.php" method="POST" style="text-align:center;" onsubmit="return validateForm()">
      <h2> Registration </h2>
      <fieldset>
        <input type="text" name="firstname" placeholder="first name"> <br>
        <input type="text" name="lastname" placeholder="last name"> <br>
        <input type="text" name="address" placeholder="address"> <br>
        <input type="text" name="email" placeholder="email"> <br>
        <input type="text" name="phone" placeholder="phone"> <br>
        <h3> College Graduate? </h3>
        <input type="radio"
          name="education"
          value="yes"> yes
        <br>
        <input type="radio"
          name="education"
          value="no"> no
      <br>
        <h3> If so, please specify: </h3>
          <label for="educationfield"> Education </label>
        <select name="educationfield[]" id="educationfield">
          <option value="N/A"> N/A </option>
          <option value="Associates"> Associates </option>
          <option value="Bachelors"> Bachelors A./Bachelors S. </option>
          <option value="Masters"> Masters </option>
          <option value="Doctorate"> PhD/MD </option>
       
        </select>
        <h3> Languages known </h3>
        <input type="checkbox"
          name="language[]"
          value="English"> English <br>
        <input type="checkbox"
          name="language[]"
          value="Spanish"> Spanish <br>
        <input type="checkbox"
          name="language[]"
          value="French"> French <br>
        <input type="checkbox"
          name="language[]"
          value="German"> German <br>
        
        <input type="submit" name="button">
      </fieldset>
    </form>
      
      <h3> What to do after you submit </h3>
      <p>
        We will process your application immediately upon submission! Make sure to check your email for a confirmation message. If you do not receive a confirmation message, please check your spam folder. If you still do not receive a confirmation message, please contact us at: <a href="mailto:example.com"> skylabs.com </a>
      </p>
      <h3> Common Dosage Table to Phase of Treatment </h3>
      <table style="text-align:center; margin: 0px auto; border: 1px;">
        
        <tr>

          <th> Phase 1 - Preload </th>
          <th> Week 1-4 15mg</th>
          <th> Week 4-6 20mg </th>
          <th> Week 6-8 45mg </th>
          <th> Week 7-8 60mg </th>
          <th> Week 8-10 70mg </th>
        </tr>
     
        <tr>
          <th> Phase 2 - Main Peak </th>
          <th> Week 10-11 85mg </th>
          <th> Week 11-12 100mg </th>
          <th> Week 12-13 120mg </th>
          <th> Week 12-13 120mg-PRN </th>
          <th> Week 13-14 120mg-PRN </th>
        </tr>
        <tr>
           <th> Phase 3 - Cooloff </th>
          <th> Week 15-16 PRN-115mg </th>
          <th> Week 16-17 100mg </th>
          <th> Week 17-18 80mg </th>
          <th> Week 18-19 60mg </th>
          <th> Week 20-24 60mg-15mg </th>
        </tr>
      </table>
      <h3> relevant resource </h3>
      <p> Ketamine is listed as an essential medicine, as described by the WHO </p>
      <a href="https://list.essentialmeds.org/"> list.essentialmeds.org </a>

  </body>
</html>