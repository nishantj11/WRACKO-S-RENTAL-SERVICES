<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
   <?php require_once "session.php";?>
<title> WRACKO'S RENTAL</title>
<style>
body{
    margin: 0;
    padding: 0;
    font-size: 15px;
}

/* Navigation */
nav{
    margin-top: -24px;
    overflow:hidden;
    margin-left: 3%;
}

nav ul{
    margin: 0;
    padding: 0;
}

nav ul li{
    display: inline-block;
    list-style-type: none;
}

nav > ul > li > a{
    color: black;
    display: block;
    line-height: 2em;
    padding: 0.5em 1em;
    text-decoration: none;
}

.logo-img{
    float: left;
    position: relative;
    margin: 25px 15px 15px 10px;
}
.bg-div{
   background:white;
   overflow: hidden;
}
figure img{
        width: 1170px;
        height: 700px;
    }
     figcaption{
         color: #B6B6B4;
        position: absolute;
        top: 800px;
        font-weight: bold;
        font-size: 35px;
        right: 38%;
    }
    article{
        width: 350px;
        height: 300px;
        background-color: grey;
        color: white;
        display:inline-block;
        text-align: center;
        font-weight: bold;
    }
    
    .bash{
        padding-top: 10px;
        margin-top: 280px;
        width: 348px;
        height: 23px;
        background-color: white;
        border-style: solid;
        border-radius: 0px;
        border-width: 1px;
        border-color: black;
    }
    .bash:hover{
        background-color: #B6B6B4;
    }
    a{
        text-decoration: none;
        color: black;
        cursor: pointer;
    }
    
    footer{
        text-align: center;
        
        
        font-size: 20px;
        margin-top: 50px;
    }
 .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 30px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      -webkit-animation: animatezoom 0.6s; 
    animation: animatezoom 0.6s 
}
.contact {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 30px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      -webkit-animation: animatezoom 0.6s; 
    animation: animatezoom 0.6s 
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  margin-bottom: 65px;
}
.modal-content1 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
  margin-bottom: 65px;
}

/* The Close Button */
.close,.exit {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus,
.exit:hover,
.exit:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.abt{
     width: 50%;
    margin: auto;
    font-size: 20px;
    margin-bottom: 50px;
}

.abt p{
    font-family: 'Gill Sans',Calibri,Trebuchet MS,sans-serif;
}
.con{
  width: 320px;
  padding: 10px;
  margin: 0;
}

.con p{
    font-size: 18px;
}
.contac
{
    display: -webkit-box;
    width: max-content;
    margin: auto;
}
.img{
    border-radius: 100%;
    width: 200px;
}
.h2{
    text-align: center;
}
.im{
    text-align: center;
}  
h3{
    text-align: center;
} 



@-webkit-keyframes animatezoom { 
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)} 
} 
    @keyframes animatezoom { 
    from {transform: scale(0)} 
    to {transform: scale(1)} 
} 
@media screen and (max-width: 300px) { 
    span.psw { 
    display: block; 
    float: none; 
    } 
    .cancelbtn { 
    width: 100%; 
    } 
}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: darkblue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 39%
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


</style>
</head>
<body>
<div >
    <img class="logo-img" src="site\logo.jpg" style="width: 9%;" ALT="align box" ALIGN=CENTER>
</div>
<div class="bg-div" style="margin-left: 34%;">
    <p style="font-size: 30px;">WRACKO'S RENTAL SERVICES</p>
    <nav style="margin-left: 8%">
        <ul>
            <li><a id="myBtn">About Us</a></li>
            <li><a id="myCus">Contact Us</a></li>
            <li><a href="homepage.html">Sign Out</a></li>
    </nav>
</div>
   
    <img src='site/car1.jpg' style="width: 98%; margin-left: 1%;">
     
    <figcaption>SPEED YOU NEED</figcaption>
    <section style="margin-top:43px; margin-left: 78px;">
        <article style="background-image:url('site/bike.jpg'); margin-left: 40px;">
            <label>
                TWO WHEELER
            </label>
            <div class="bash">
            <a href="booking.php">Select Your Ride</a>
            </div>
        </article>
        <article style="background-image:url('site/car.jpg'); margin-left: 57px;">
            <label>
                FOUR WHEELER
            </label>
            <div class="bash">
            <a href="booking.php">Select Your Ride</a>
            </div>
            </article>
        <article style="background-image:url('site/bus.jpg'); margin-left: 57px;">
             <label>
                GROUP FRIENDLY
            </label>
          <div class="bash">
            <a href="booking.php">Select Your Ride</a>
            </div> 
        </article>
        
    </section>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<div>
    <h1 style="text-align: center;">About Us</h1>
<div class="abt">
    <p >No more worries about petrol mileage, fuel costs, insurance, and car breakdowns! Wracko has enabled driving convenience for travellers around the country and is fast expanding its reach to cities including Ahmedabad, Bangalore, Chandigarh, Chennai, Coimbatore, Delhi-NCR, Hyderabad, Jaipur, Kochi, Kolkata, Ludhiana, Mangalore, Mumbai, Mysore, Pune, Siliguri, Vizag, Nagpur, Udaipur, Vijayawada, Surat, Lucknow and Guwahati. Self drive cars from Zoomcar have given customers more control, privacy, and freedom. Book a self drive car in any city you visit with the <b>WRACKO</b> on your phone and feel at home wherever you go.<br></p>
</div>
<h1 style="text-align: center;">Founders</h1>
<div class="contac">


    <div class="con">
        <div class="im"><img class="img" src="site/nishant.jpg" alt="Klematis"></div>
        <div>
            <h2 class="h2">Nishant Jaiswal</h2>
            <h3>CEO</h3>
            <p>A Brilliant Imaginative-Minded Man. The Brains behind all successes and confusions of Wracko. A Huge fan of <b>CINEMAGEEKS</b>.
            He rolles along with his two other amazing founders. Together they own top amazing car and bike models, as shown in the Hall Of Fame.</p>
            <h4>nishant@wracko.co.in</h4>
        </div>
    </div>
    <div class="con">
        <div class="im"><img class="img" src="site/ashuuu.jpg" alt="Klematis"></div>
        <div>
            <h2 class="h2">Ashutosh Shrivastava</h2>
            <h3>COO</h3>
            <p>A Brilliant techno-practical run man. He manages the technical issues and promotions of Wracko's.
            He succesfully runs his own company <b>ORDER YOUR FOOD</b> delivering food, everywhere they reach and ending famines.</p>
            <h4>ashutosh@wracko.co.in</h4>
        </div>
    </div>
    <div class="con">
        <div class="im"><img class="img" src="site/priyank.jpg" alt="Klematis"></div>
        <div>
            <h2 class="h2">Jignes Patel</h2>
            <h3>Head Designer</h3>
            <p>An Amazing Designer. In this life itself he's on a complete another level, all imagination and techie is beautifully laid out and brought to life by him. He has taken over the UI.
                He Successfully also runs The Famous <b>COLDPLAY</b> official website.</p>
            <h4>jignes@wracko.co.in</h4>
        </div>
    </div>
</div>
</div>
  </div>

</div>


<div id="myContact" class="contact">

  <!-- Modal content -->
  <div class="modal-content1">
    <span class="exit">&times;</span>
<div>
    <h1 style="text-align: center;">Contact Us</h1>
    <div class="container">
    <form action="homepage.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..." required>

    <label for="mailid">E-mail Id</label>
    <input type="text" id="id" name="mailid" placeholder="Your E-mail Id..." required>

    <label for="city">City</label>
    <select id="city" name="city">
      <option value="choose">Choose Your City...</option>
      <option value="Delhi-NCR">Delhi-NCR</option>
      <option value="Chennai">Chennai</option>
      <option value="Bangalore">Bangalore</option>
      <option value="Varanasi">Varanasi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Pune">Pune</option>
      <option value="other">Other</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write your Feedback Here..." style="height:200px" required></textarea>

    <input type="submit" value="Submit" id="feed">
  </form>
</div>

</div>
  </div>

</div>
    
    <footer>
        </br>
        <label>&copy; Wreck it Ralph</label>
        </br>
        <p>For Any Queries and Complaints Contact us or mail to us at : wreckitmotors@gmail.com</p>
    </footer>

<script>
// Get the modal
var modal = document.getElementById('myModal');
var contact = document.getElementById('myContact');
var feed=document.getElementById('feed');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var cus = document.getElementById("myCus");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("exit")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
cus.onclick = function() {
  contact.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal.style.display = "none";
}
span2.onclick = function() {
  contact.style.display = "none";
}
feed.onclick = function() {
    contact.style.display = "none";
    alert("Thank You for your precious Feedback, you will soon recieve a reply on your E-mail Id... ");
}
//When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == contact) {
    contact.style.display = "none";
  }
}
</script>
</body>
</html>
