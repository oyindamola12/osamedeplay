<?php
include_once("db.php");
$sql = "SELECT * FROM Osamede";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$osamedeTicket= $stmt->fetchAll();
?>








<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get Ticket</title>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Nunito:wght@200;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
     <link rel="stylesheet" href="./phone.css">
        <link rel="stylesheet" href="./aboutli.css">
        <link rel="stylesheet" href="./about.css">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./ipad.css">
        <link rel="stylesheet" href="popup.css">
        <script defer src="./node_modules//swup/dist/swup.min.js"></script>
        
       
    </head>  
<body>
    <body>
        
         <div id="parent">

     
    <header class="header">
        <div class="one"></div>
             <nav class="navbar2">
  
                <div class="hamburger">
                <div class="menu"></div>
                <div class="menu"></div>
                <div class="menu"></div>
                
                </div>
                <ul class="nav-links ">
                    <li><a  href="index.html" onclick="slideIn('home');" class="cool-link">HOME </a></li>
                    <li><a  href="thestageplay.html"  onclick="slideIn('stageplay');" class="cool-link">THE STAGE PLAY</a></li>
                    <li><a  href="lilian.html"  onclick="slideIn('stageplay');" class="cool-link">ABOUT</a>              
                        <ul class="olubiul2">
                            <li><a class="cast" href="lilian.html">EXECUTIVE PRODUCER</a></li> 
                            <li ><a  class="cast"href="olatunde.html">CO-EXECUTIVE PRODUCER</a></li> 
                            <li ><a class="cast" href="crew2.html">DIRECTOR/PRODUCER</a></li> 
                           <li><a class="cast"  href="gold.html">GOLD LILIES</a></li> 
                             </ul></li>
                    <li><a  href="ticket.html" onclick="slideIn('ticket');"  class="cool-link"> GET TICKET</a></li>
                    <li><a  href="cast.html" onclick="slideIn('cast');"  class="cool-link"> CAST</a></li>
                     </ul>
                </nav>
                <div class="two"></div>
            </header>
                <div class="moveticket">
             <img class="logo2" src="./images/Osamede_Logo.png" alt="" >
                    <table class="bigdiv" action="pay.php" method="POST" >
                        <div class="mylogo">
                      
                      
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Product name</th>
                          <th>Ticket</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Reference</th>

                      </tr>
                      <?php foreach ($osamedeTicket as $osamedeplay):?>;
                      <tr>
                          <td class="customers"><?= $osamedeplay->myname;?><td>
                          <td  class="customers"><?= $osamedeplay->email;?></td>
                          <td class="customers"><?= $osamedeplay->phone;?></td>
                          <td class="customers"><?= $osamedeplay->product_name;?></td>
                          <td class="customers"><?= $osamedeplay-> ticket;?></td>
                          <td class="customers"><?= $osamedeplay->set_date;?></td>
                          <td class="customers"><?= $osamedeplay->set_time;?></td>
                          <td class="customers"><?= $osamedeplay->reference;?></td>
                        </tr>
                        <?php endforeach; ?>
</table>
<div class="royals">
                                <img class="queen3" src="./images/Queen_Benin.png" alt="">
                            </div>
                            <footer class="bottom">
                                <div class="footerdiv">

                                </div>
                            </footer> 
                        </div>
            
            



          
                        <script src="./script.js"></script>
        
    </body>
</body>
</html>