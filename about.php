<?php
    if(isset($_GET["eventname"])){
        $search=$_GET["eventname"];
    } else {
        $search="";
    }
    require_once "queryDb.php";
    $events=getEvents("$search");  
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Trident Removals GC - About</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Trident Removals GC - Gold Coast's family owned business that has been providing quality, affordable removalist services for over 5 years.">
    <meta name="keywords" content="Trident, Removals, Gold Coast, removalists, local, expert, cheap, affordable, sponsor">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="script.js" type="text/javascript"></script>
  </head>
  <body>    
    <header itemscope itemtype="http://schema.org/LocalBusiness">
      <div class="logo">
        <img class="tridentlogo" src="images/tridentheaderlogo.png" alt="Trident Removals Header logo" itemprop="logo" />
      </div>
      <div class="contact">
        <h1>CALL NOW: <a href="tel:0411111111" itemprop="telephone">0411111111</a></h1>
      </div>    
    </header>    
    <nav class="navbar">
      <div class="navbarlinks">
        <a class="navlink" href="index.html">Home</a>
      </div>
      <div class="navbarlinks">
        <a class="navlink" id="active" href="about.php">About</a>
      </div>
      <div class="navbarlinks">
        <a class="navlink" href="services.html">Services and Pricing</a>
      </div>
      <div class="navbarlinks">
        <a class="navlink" href="freequote.html">Get a Free Quote</a>
      </div>
      <div class="navbarlinks">
        <a class="navlink" href="bookremoval.html">Book a Removal</a>
      </div>
      <div class="navbarlinks">
        <a class="navlink" href="contact.html">Contact</a>
      </div>        
    </nav>
    <div id="page"> <!-- This div provides responsive layout with breakpoints -->
    <div class="body">
      <div class="aboutuspicturesdiv">
        <img class="aboutuspictures" src="images/removalist1.png" alt="Trident Removalists" /><br>
        <img class="aboutuspictures" src="images/truck.png" alt="Trident Removals Truck" /><br>
        <img class="aboutuspictures" src="images/bestremoval494x318.png" alt="Trident Removals animated" /><br>
        <img class="aboutuspictures" src="images/goldcoast.png" alt="Gold Coast" /><br>
      </div>
      <div class="aboutustext">
        <h1>ABOUT US - TRIDENT REMOVALS</h1>
        A local, family owned business that has been servicing the Gold Coast for more than 5 years. Affordable,
        expert services with staff committed to getting the job done right, first time, every time, all the time! 
        Enjoy peace of mind when dealing with us, no matter your schedule, we will strive to ensure you get your 
        belongings moved quickly and safely into your new home.
        <br><br>         
        We are the alternative to the Do-It-Yourself transport and removals. We take care when transporting your items and 
        furniture and we will provide a basic plastic wrap for your lounge, tables and cabinets etc. above our general 
        blanket wrapping. Giving you that extra peace of mind.
        <br><br>
        Trident Removals is based on the belief that our customers needs are of the utmost importance.
        Our entire team is committed to meeting those needs. As a result, a high percentage of our business is from 
        repeat customers and referrals.
        <br><br>
        Our team just wants to get in and get the job done as quickly as possible so that you save money!
        <br><br>
        We would welcome the opportunity to earn your trust and deliver you the best service in the industry.
        <br><br>
        <h1>TESTIMONIALS</h1>
        Morgan, Southport - "Fantastic service, no fuss, can do attitude by the whole team. Thank god they helped me move out of Cooroibah"
        <br><br>
        Tiana, Nerang - "Quick and easy to deal with, and really great value service for the asking price"
        <br><br>
        Calvin, Broadbeach - "Great guys, didn't have any issues moving my furniture into my apartment on the 63rd floor, will use them again"
        <br><br>
        Pedro, Labrador - "Nice looking lads, had a friendly manner, good with their hands. Definitely would hit up again"
        <br><br>
        Claudia, Biggera Waters - "Good and handy young gentlemen, easy to talk too , gets the job done quickly. Definitely use Trident Removals as a top priority for further removals and refer to all my friends"
        <br><br>
     </div>
     <div class="feedbackformdiv">
       <form id="feedbackform" method="get" action="about.php">
          <h2> Enjoyed our service? Let us know! </h2>          
          <div> <!-- Name and Suburb -->
            <label for="feedbackname">Name:</label><br>
            <input id="feedbackname" type="text"  name="feedbackname"/><br>
            <label for="suburb">Suburb:</label><br>
            <input id="suburb" type="text"  name="suburb"/><br>
          </div>             
          <div> <!-- Feedback for service -->
            <label for="feedbacktext">About our Service: </label><br>
            <textarea id="feedbacktext" name="feedbacktext" rows="5" cols="60">
            </textarea>
          </div>      
          <!-- Submit button -->
          <input id="submitfeedback" type="submit" onClick="validateFeedbackForm(event)" value="Submit feedback" />      
        </form>
      </div>
      <div class="eventform">
        <h2>As a local Gold Coast business we pride ourselves in taking part in community events. See below for events Trident Removals has sponsored
        or been a part of!</h2><br>
        <div class="searchform">
          <form method="get" action="about.php">
            <label for="eventname">Search by Event:</label>
            <input type="text" id="eventname" name="eventname">
            <input type="submit" value="Search">      
          </form>
        </div>
        <div class="eventarray">
          <table>
            <thead>
              <tr>
                <th>Event</th>
                <th>Location</th>
                <th>Description</th>
                <th>Date</th>                
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($events as $event) {          
               ?>
              <tr>
                <td><?=$event['EVENTNAME']?></td>
                <td><?=$event['LOCATION']?></td>
                <td><?=$event['DESCRIPTION']?></td>
                <td><?=$event['DATE']?></td>                
              </tr>
              <?php
                }    
               ?>        
           </tbody>
         </table>  
       </div> <!-- div class=eventarray -->
      </div> <!-- div class=eventform -->      
    </div> <!-- div class="body" -->
    </div> <!-- div id="page" -->
    <footer>
     <div class="logo">
        <img class="tridentlogo" src="images/tridentheaderlogo.png" alt="Trident Removals Footer logo"/>
     </div>
     <div class="contact">
       <a target="_blank" href="https://www.facebook.com/"><img class="icon" src="images/facebook-icon.png" alt="Facebook link"/></a><br>
       <a target="_blank" href="https://au.linkedin.com/"><img class="icon" src="images/linkedin-icon.png" alt="LinkedIn link"/></a><br>
       <span id="copyright">© 2019 – Sean Bourchier</span>
     </div>  
    </footer>
  </body>
</html>
