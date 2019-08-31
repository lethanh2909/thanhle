<!DOCTYPE html>
<html>
<title>Lego World</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

ul {
    list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #009933;
      color: #fff
}
nav ul ul {
    position : absolute;
    padding : 0;
    display : none;
    color: #fff
}
nav ul li {
    float : left;
    padding : 5px;
}
nav ul li:hover{
    background-color: #ffffff;
}
nav ul li ul li{
    
    float : none;
}
nav ul li:hover>ul{
    display: block;
    background-color: #009933;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3; width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-bottombar w3-border-red">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-large w3-padding w3-hover-red" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
      
      <img src="images/logo.PNG" style="width:65%;" class=" w3-display-topmiddle w3-container"><br><br><br><br><br><br><br><br><br>
      
    <h4 style="text-align: center"><b> </b></h4>
    <p class="w3-text-grey"></p>
  </div>
    <br><br>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-arrow-left fa-fw w3-margin-right"></i>HOMEPAGE</a>        
  </div> 
</nav>
<!--End of Sidebar/menu -->

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header>
      <a href="#"><img src="images/logo.PNG" style="width:60px; border-style: solid" class="w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-bar w3-black">
        <a href="admin.php" class="w3-bar-item w3-button w3-right fa fa-male w3-hover-red">ADMIN</a>  
    </div>
        
  </header>
  <!--End of Header -->
  
    <div class="container w3-padding-large" id="portfolio">
        <div class="w3-bottombar">
            
            <div class="w3-panel w3-border w3-yellow w3-round-large w3-padding-16">        
                <p class="w3-xlarge w3-serif " style="text-decoration: underline " align="middle">___________________________________MENU___________________________________</p>             
                <nav>    
                    <ul>
                        <li>
                            <a href="">Manage Catalogue</a>
                            <ul>
                                <li><a href="addcatalogue.php">Add Catalogue</a></li>
                                <li><a href="managecatalogue.php">Update/Delete catalogue</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Manage Items</a>
                            <ul>
                                <li><a href="additem.php">Add Item</a></li>
                                <li><a href="manageitem.php">View/Search/Update/Delete item</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </nav>                    
            </div>
        </div>
    </div>
