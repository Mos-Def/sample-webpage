<!DOCTYPE html>
<html lang="en-us">
  <head>
     <meta charset="UTF-8" />
     <title>Contact Page</title>
     <link href="/css/contactstylesheet.css" type="text/css        />
 </head>
     <body>
        <div class="header" style="border: solid black 
         2px;">
        <header>
          <h1><b>Contact Form</b></h1>
          <link href="/php/contactform.php"                                                                            
           class="contactform">
       </header>
          <div class="topnav" style="border: dotted black    
           1px;">
          <nav>
             <ul>
                <li><a href="#">Back</a></li>
                <li><a href="#">About us</a></li>
            </ul>
         </nav> 
         </div>
           <main>
               <div class="contactform" style="border :1px      
               solid black;">
               <form class="contact-form" 
                action="php/contactform.php" method="post">
                  <input type="text" name="name" 
                   placeholder="Full name">
                  <input type="text" name="mail" 
                  placeholder="Your e-mail">
                  <input type="text" name="subject"  
                  placeholder="Subject">
                   <textarea name="message" 
                    placeholder="message"></textarea> 
                     <button type="submit" name="submit"> 
                     SEND MAIL</button>
               </form>
            </div>
<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "r.d.siegs@protonmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}
           </main>
             <footer>
               <address>
               </address>
            </footer>
     </body>
</html>
