<? php ?>

<title>Handscart</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Carter One' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Jacques Francois Shadow' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bonbon' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Inline' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Capriola' rel='stylesheet'>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("1-tcmn.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="hands.html" class="w3-bar-item w3-button w3-wide">LOGO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="hands.html" class="w3-bar-item w3-button"><i class="fa fa-home"></i>HOME</a>
      <a href="mission.html" class=" w3-bar-item w3-button"><i class="fa fa-photo"></i>MISSION</a>
      <a href="team.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i>TEAM</a>
      <a href="portfolio.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PORTFOLIO</a>
      <a href="finalapply.html" class="w3-bar-item w3-button"><i class="fa fa-desktop"></i> APPLY</a>
      <a href="contact.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="hands.html" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="mission.html" onclick="w3_close()" class="w3-bar-item w3-button">MISSION</a>
  <a href="team.html" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="portfolio.html" onclick="w3_close()" class="w3-bar-item w3-button">PORTFOLIO</a>
  <a href="finalapply.html" onclick="w3_close()" class="w3-bar-item w3-button">APPLY</a>
  <a href="contact.html" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<div style="padding-top: 100px" id="home">
<h2 style="font-family: 'Aclonica'; text-align: center "><u>Portfolio</u></h2>
<br>
<p  style="text-align: center">Its important to learn from those who have been there , done that !!<br>

  # some examples of pictures or projects to show  ….so that in future they will add their company profile/project here.
</p>

<br>
<br><br><br>
<img src="ourproject1.jpg" style="float: left ; width: 600px; height: 400px"><br><br><br><br><br><br>
<img src="ourproject2.jpg" style="float: right ; width: 600px; height: 400px">
</div>  
<br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>
<!-- Footer -->
<div class="w3-container w3-black" style="padding:5px 3px" id="contact">
  <h3 class="w3-center" style="float: left"><u>CONTACT</u></h3><br>
  <div class="w3-row-padding" style="margin-top:8px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> 11 Rue De Carnot, Kremlin Bicentre, Paris, France</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +33-755757571 +91-9024386464</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: support@handscart.com</p>
      <br>
      <form action="action_page.php" target="_blank">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>

    <div class="w3-half" style="padding-left:300px">
      <p class=" w3-xxlarge w3-margin-right" style="float: right">About Us</p><br><br><br>
      <p class=" w3-medium w3-margin-right" style="float: right">India is a land of diversity. Everything starting from <br>language dialect, clothes , traditions , art to festivals has its own flavour and essence .<br> So we at “handscart.com” help to connect Indian artisans and designers - communities throughout the developing world.<br>  With the help of people who have carried these century long art form one generation to other,we make exquisite products which are the perfect blend of design and culture.
</p>

    
  </div>
</div>
<footer class="w3-center w3-black w3-padding-8">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xxlarge w3-section">
    <a href="https://www.facebook.com/login.php" target="blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/?hl=en" target="blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome" target="blank"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="https://in.pinterest.com/" target="blank"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/" target="blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/feed/" target="blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
  <p>Copyright © 2018 - All Rights Reserved - <a href="http://www.handscart.com/" title="W3.CSS" target="_blank" class="w3-hover-text-green">Handscart.com</a></p>
</footer>

</body>

