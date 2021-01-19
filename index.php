<?php
 $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
 $badword = $_GET["badword"];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Badwords</title>
   </head>
   <body>
     <section id="text_default">
       <h2>Text </h2>
       <p> <?php echo $text; ?> </p>
     </section>
     <section id="text_length">
       <h2>Text length </h2>
       <p>  <?php echo strlen($text); ?> </p>
     </section>
     <section id="text_censored">
       <h2>Censored text</h2>
       <p> <?php echo str_replace($badword,"***",$text); ?> </p>
     </section>
   </body>
 </html>
