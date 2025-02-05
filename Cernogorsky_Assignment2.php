<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
      <Title> Contact Us </title>
  </head>
    <body>
      <a href="index.php"> Home </a> </br>
      <a href="Cernogorsky_Assignment1.php"> Assignment 1 </a> </br>
      <img src="https://media.istockphoto.com/id/1792906675/photo/doctor-giving-nasal-spray-to-female-patient-healthcare.jpg?s=612x612&w=0&k=20&c=KHU1hfZts1ahdIkSdNopGAf3Y9u9ALf9CqZhGp68_ko=" style="display: block; margin-left: auto; margin-right: auto; width: 50%" />
      <script>
        //document.write("hello");
        function validateForm(){
          let firstName = document.forms["contactForm"]["firstName"].value;
          if(firstName == ""){
            alert("first name required!");
            return false;
          };
          let lastName = document.forms["contactForm"]["lastName"].value;
          if(lastName == ""){
            alert("last name required!");
            return false;
          }
          let phoneNumber = document.forms["contactForm"]["phoneNumber"].value;
          if(phoneNumber == ""){
            alert("phone number required!");
            return false;
          }
          let emailAddress = document.forms["contactForm"]["emailAddress"].value;
          if(emailAddress == ""){
            alert("email address required!");
            return false;
          }
          let subject = documents.forms["contactForm"]["subject"].value;
          if(subject == ""){
            alert("subject required!");
            return false;
          }
          let message = documents.forms["contactForm"]["message"].value;
          if(message == ""){
            alert("message required!");
            return false;
          }
        };

      </script>
      <h2 style="text-align:center"> Contact Us </h2>
      <p style="text-align:center;">
        Feel free to contact our center at any time! Our staff will parse the information provided above and respond to your query as soon as possible! In the meanwhile, make sure all fields are provided, so we can respond to your query, have a great day!
      </p>
    
      <!-- method="POST" is preferred -->
      <form action="Form2Data.php" method="GET" name="contactForm" onsubmit="return validateForm()" style="margin: 0 auto; text-align:center; ">
        <fieldset>
          <!-- require javascript here -->
          <!-- 'required' keyword would work in this position -->
          <!-- ex: <input type="text" placeholder="x" name="x" required> -->
         
          <input type="text" placeholder="First Name" name="firstName"> </br>
          <input type="text" placeholder="Last Name" name="lastName"> </br>
          <input type="text" placeholder="Phone Number" name="phoneNumber"> </br>
          <input type="text" placeholder="Email Address" name="emailAddress"> </br>
          <input type="text" placeholder="Subject:" name="subject"> </br>
          <input type="text" placeholder="Message:" name="message"> </br>
          <!-- -->
            <div style="text-align: right">
          <input type="submit" value="Submit" style="position: absolute; right: 0;"> </br>
          </div>
      
        </fieldset>
      </form>
      <p> feel free to contact us through these means as well:</p>
        <ul>
          <li> <a href="slack.com"> Slack.com: @Cernogorsky1 </a> </li>
          <li> <a href="stackoverflow.com"> Stackoverflow.com: @Cernogorsky1 </a> </li>
          <li> <a href="discord.com"> Discord: @Cernogorsky1 </a> </li>
        </ul>
    
      <img src="https://r73.cooltext.com/rendered/cooltext468585857625681.png" alt="Cernogorsky1" style="display: block; margin-left: auto; margin-right" />
        
        
</html>