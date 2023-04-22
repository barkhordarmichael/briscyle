<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
    <title>Welcome to Briscycle</title>
    
    <body onload="test()"></body>
</head>
<body>
    
    
        <?php
        include ("mast.php")
    ?>
       
        
            <main>            
        
        
        
        <main>
            <section>
            <form class="contact-form"action="https://formsubmit.co/michaelbarkhordar@yahoo.co.uk" method="POST">
        
                <h1>CONTACT FORM</h1>
                <input type="text" name="name" placeholder="Full name">
                    <input type="text" name="mail" placeholder="Your email">
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="message" col="100" row="50" placeholder="Message"></textarea>
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="box">
                    <input type="hidden" name="_next" value="https://mbwebdezign.co.uk/briscycle/thank-you.html">
                    <button type="submit" name="submit" class="submit-btn">SEND FORM</button>
           </form>
              </section> 
        </main>
    </div>
    </body>
</html>