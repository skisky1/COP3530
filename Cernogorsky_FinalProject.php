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
        <li> <a href="Cernogorsky_Assignment5.php"> Assignment 5 </a> </li>
      </ul>
      <h1> Homepage of Luke Cernogorsky's Ketamine Clinic </h1>
        <img src="https://static.wixstatic.com/media/9411ad_3ffb6c52294c4d75b61b264b952814f4~mv2.png/v1/fill/w_640,h_366,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/9411ad_3ffb6c52294c4d75b61b264b952814f4~mv2.png" alt="clinc welcome!" height="500" width="600">"
        <br>
        <img src="https://app.joinhandshake.com/user_profile_photos/24894222?size=profile" alt="Luke Cernogorsky">
        <p> The purpose of this site is to reach out to the community about the benefits of ketamine therapy, while writing up a webpage for COP from scratch. Ultimately, what we try to achieve at SkyLabs Clinic is a unique service that tailors dosage in an unconventional manner. Many clinics believe in either macro or micro dosing for ketamine, while we have engineered a way to get "the best of both worlds" with our program. </p>
        <p> to continue, please view our companies cookie policy <a href="Privacy_Policy.php"> Privacy Policy </a> </p>
        <p> Sources used as a secondary resources for when I felt like I needed more explanations, are from the following sites: </p>
          <ul>
            <li> <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/checkbox"> MozDevNet. (2024). MDN Web Docs - Checkboxes. https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/checkbox </a></li>
          <li> <a href="https://web.stanford.edu/group/csp/cs21/csscheatsheet.pdf"> Stanford University (Ed.). (n.d.). Cascading style sheets cheatsheet &66. Cascading Style Sheets Cheatsheet (CSS 1&2). https://web.stanford.edu/group/csp/cs21/csscheatsheet.pdf </a></li>
            <li> <a href="https://stackoverflow.com/questions/11234622/simple-javascript-checkbox-validation"> TheLettuceMaster. (2012, July). Simple javascript checkbox validation. Stack Overflow. https://stackoverflow.com/questions/11234622/simple-javascript-checkbox-validation  </a></li>
            <li> <a href="https://www.php.net/manual/en/reserved.variables.session.php">Tugurl, & bohwaz. (2015). Hypertext preprocessor. PHP superglobals - session. https://www.php.net/manual/en/reserved.variables.session.php  </a></li>
            <li> <a href="https://www.w3schools.com/jsref/prop_checkbox_checked.asp">W3schools.com. HTML DOM. (2024). https://www.w3schools.com/jsref/prop_checkbox_checked.asp  </a></li>
          </ul>
      <br>
          <p> I learned that PHP is a language I greatly underestimated. Speaking as someone who dabbles in procedural programming specifically, there is something to be said about the robust nature of PHP, regarding web development. Although it is not preferred, it does have built in access, through "superglobals" to essentially keep elements of DOM fully accessible to the programmer and server.</p>
          <p> I would like to learn more about PHP conventions, specifically. Many languages, especially modern, seem to not follow PHP's conventions, such as -> in place of . for a separator for methods/attributes. Or that . simply means concat. There is a great deal of PHP I still at not privy to, and that is what makes it so interesting. It shares an obscure energy (in my opinion) of Perl. </p>
          <p> Knowing what I know now, especially in the correct major for my type of person, I will utilize this knowledge of PHP to better be a server administrator and/or script programmer. There is an appreciation that I now have built for code that reads clean and ultimately marks up as clean when it runs. This class enabled me to have a certain "strict type" for the way I write and view code. </p>
          <p> I plan to archive this replit and add it to a github repo, so I may display this as a portifolio fo some kind. In my intro years to college, I never fully cultivated what I knew then, and as a result: I have very little concrete assignments that can display my ability, good or bad. This repo will certainly aid a CV or Resume of a job that will actually matter one day, and for that, I thank you, Dr. McMillan.</p>
          <p> My most challenge module(s) were anything surrounding nested loops. I have no real idea why I am able to parse inreasonable amounts of code, but whenever a semi-complex arithmetic operation comes into play, I am completely lost. Mind you, I am not the best at math, so this could be why. Maybe in the course's future, there could be a true "for dummies" version for the arithmetic side. Modulus, for example, was explained very well. Maybe some visual aid would assist people like me? However, I still will persist, as this class was the most enrichment I have had in awhile. Thank you for opportunity to create a project, and for the discussion about AI, Dr. McMillan. I hope you have a wonderful rest of your year, looking forward to what the future holds - Luke Cernogorsky </p>

    <?php

      for($i = 0; $i < 10; $i++){
        for($x = 0; $x < (10 - $i); $x++){
          echo " ";
        }
        for($k = 0; $k <= $i; $k++){
          echo "*";
        }
        echo "<br>";
      }
?>