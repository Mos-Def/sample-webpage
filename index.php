<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8" />
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet"
          title="normal" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Page</title>
  </head>
    <body>
      <header>
      <div class="header">
        <h1>Header</h1>
      </div>
         <nav>
         <div style="border :1px solid white;"  class="topnav" />
	      <a href="#" class="navlink">Home</a>
              <a href="#" class="navlink">About us</a>
              <a href="#" class="navlink">Contact</a>
         </div>
         </nav>
         <img src="img/company-logo.png" alt="Company logo" class="logo" style="max-width:100%;height:auto;">
       </header>
         <div class ="aside">
         <aside>
           <h3>Testimony</h3>
             <blockquote>
                <em>"Happy customer"</em>
             </blockquote>
          </aside>
          </div>
           <main>
             <section>
             <div class="welcomebar">
               <h2>Welcome</h2>
             </div>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget auctor arcu. Et
                  Curabitur a augue dignissim, lacinia orci vitae, gravida nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                  iam interdum nulla vel aliquet venenatis. Phasellus nec mi turpis. Phasellus enim sapien, egestas eu volutpat et, porttitor a mi. 
                  Quisque congue felis quis vehicula elementum. Quisque erat nisi, interdum nec felis at, dignissim pulvinar dolor. 
                  Nulla eu dui ut tellus interdum tincidunt. Donec interdum sapien ac tristique sagittis. 
                  Maecenas quis aliquet lorem. Praesent consectetur purus quam, a faucibus ante auctor id. Vestibulum ante ipsum primis in fa
                  ucibus orci luctus et ultrices posuere cubilia curae;
                  Maecenas in lacinia lorem. Ut egestas leo arcu, a convallis velit tempus vitae. Nullam at rhoncus urna. 
                  Pellentesque varius sagittis venenatis. Suspendisse sit amet facilisis enim. Integer nec lorem neque. Aenean eget neque nisi. 
              </section>
		<figure>
	          <figcaption>Article's Title</figcaption>
                  <article>
                  <h4>Article</h4>
                    <p>Praesent eu lorem convallis, gravida nisi id, pulvinar nisl. Pellentesque mattis bibendum tortor, id laoreet arcu molestie ut. 
                       Donec facilisis libero ac nisi sodales pretium. Nullam sit amet justo nibh. Integer gravida eget enim sit amet malesuada. 
                       Suspendisse potenti. Morbi malesuada turpis et massa luctus, et eleifend purus lobortis.</p>
                  </article>
                    <cite>samplecite</cite>
	       </figure>
           </main>
             <ul>
               <li><a href="yourpagehere.com">Link</a></li>
            </ul>
             <footer>
               <figure>
               <p><b>SEND E-MAIL</b></p>
               <div class="contactform" style="border :1px black;">
                 <form class="contact-form" action="php/contactform.php" method="post">
                   <input type="text" name="name" placeholder="Full name">
                   <input type="text" name="mail" placeholder="Your e-mail">
                   <input type="text" name="subject" placeholder="Subject">
                   <textarea name="message" placeholder="message"></textarea> 
                   <button type="submit" name="submit">SEND MAIL</button>
                 </form>
              </div>
              <div style="border :1px black;">
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
?>
             <address>Contact info
                 Social media info</address>
             </div >
	        </figure>
              </footer>
    </body>
</html>
