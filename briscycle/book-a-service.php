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
            <form class="booking-form"action="https://formsubmit.co/michaelbarkhordar@yahoo.co.uk" method="POST">
        
                <h1>CONTACT FORM</h1>
                <input type="text" name="Name" placeholder="Full name">
                    <input type="text" name="Email" placeholder="Your email">
                    <input type="number" name="Contact Number" placeholder="Your contact number">
                    
                      <label> Selection your option?
                        <select style="width:380px" name="service-type">
                          <option value="Service">Service</option>
                          <option value="Repair">Repair</option>
                    
                          
                        </select><br>
                    Booking date required :<input type="date" name="Date"><input type="time" name="Time">
                    <textarea name="message" col="100" row="50" placeholder="Message"></textarea>
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="box">
                    <input type="hidden" name="_next" value="https://mbwebdezign.co.uk/briscycle/thank-you.php">
                    <button type="submit" name="submit" class="submit-btn">SEND FORM</button>
           </form>
              </section> 
        </main>
    </div>
    </body>
</html>