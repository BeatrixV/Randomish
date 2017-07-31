<!doctype html>
<html>
 <head>


   <title>Learning JQuery</title>

   <meta charset="utf-8" />
   <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />

 </head>

 <body>
   <div>

     <form class="marginTop">
       <div class="input-group">
         <span class="input-group-addon">@</span>
         <input type="email" class="form-control" placeholder="Your Email" />
       </div>
         <input type="submit" class="btn btn-success btn-lg marginTop" />
     </form>

     <?php
       $emailTo="vele.beatrix@gmail.com";
       $subject="I hope this works";
       $body="you're great!";
       $headers="From: vele.beatrix@gmail.com";

       if (mail($emailTo, $subject, $body, $headers)) {
         
         echo "Mail sent successfully!";
         
       } else{
         
         echo "Mail not sent!";
         
       }
         
         

     ?>
   </div>
</body>
</html>
