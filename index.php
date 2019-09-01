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
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOMEPAGE</a> 
    <a href="index-product.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw w3-margin-right"></i>PRODUCT</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    
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
    
        <div class="w3-container ">
            <div class="w3-panel w3-sand w3-padding-16">
                <h1 style="text-align: center; font-family: Bahnschrift">WELCOME TO THE ATN SHOP</h1>
            </div>
        <div class="w3-content w3-section " style="max-width:750px">
                <img class="mySlides" src="images/lego1.jpg" style="width:100%">
                <img class="mySlides" src="images/lego2.jpg" style="width:100%">
                <img class="mySlides" src="images/lego3.jpg" style="width:100%">
            </div>
        </div>
  </header>
  <!--End of Header -->
        
 
  
  

  <!-- ABOUT -->
<div class="w3-container w3-padding-large w3-grey">
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m4">
        <img src="images/About.PNG" style="width:70%; border-style: solid; border-color: black">
    </div>
    <div class="w3-col m8 about-style">
        <h4><b>ABOUT THE ATN SHOP</b></h4>
        <p>
            The ATN shop is a privately held, family-owned company with headquarters in Billund, Denmark, and main offices in Enfield, USA, London, UK, Shanghai, China, and Singapore. Founded in 1932 by Ole Kirk Kristiansen, and based on the iconic LEGO® brick, it is one of the world's leading manufacturers of play materials.
        </p>
    </div>
  </div>
  
  <div class="w3-row-padding w3-padding-16">
    <div class="w3-col m8 about-style">
        <p>
             Specialist in high quality toys with EDUCATION and help CREATE CREATIVITY for children
        </p>
        <p>
            All products are approved by international standards, ensuring QUALITY and absolute SAFETY
        </p>
        <p>
            Diversified with over 1,000 types of items for children of all ages
        </p>
        
    </div>
    <div class="w3-col m4">
        <img src="images/About1.png" style="width:70%" class="w3-right">
    </div>
  </div> 
</div>
  

  
    
    
<div class="w3-container w3-padding-large" style="margin-bottom:32px"> 
    
    <h4>Should you believe in our shop?</h4>
    <!-- Progress bars / Skills -->
    <p>Yes, you should</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:100%">100%</div>
    </div> 
       
</div>
  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>thanhldgch17337@fpt.edu.vn</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Chicago, US</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>512312311</p>
      </div>
    </div>
    
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
	  <div class="w3-row-padding">
	    <div class="address-style">
	      <h4><b>Address</b></h4>
	        <p>4043 N Ravenswood Ave, Chicago, IL 60613</p>
	        <p>United States</p>
	    </div> 
	    

	    <div class="address-style">
	      <h4><b>Popular tags</b></h4>
	      <p>
	        <span class="w3-tag w3-black w3-margin-bottom">LEGO</span> 
	        <span class="w3-tag w3-grey w3-small w3-margin-bottom">LEGO Technic</span>
	        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Creative</span>
	        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Intelligent</span>        
	      </p>
	    </div>

	  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by LEGO World</div>

</div> <!-- End page content -->

	<script>
		// Script to open and close sidebar
		function w3_open() {
		    document.getElementById("mySidebar").style.display = "block";
		    document.getElementById("myOverlay").style.display = "block";
		}
		 
		function w3_close() {
		    document.getElementById("mySidebar").style.display = "none";
		    document.getElementById("myOverlay").style.display = "none";
		}
	</script>

	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";  
		  }
		  myIndex++;
		  if (myIndex > x.length) {myIndex = 1}    
		  x[myIndex-1].style.display = "block";  
		  setTimeout(carousel, 5000); // Change image every 5 seconds
		}
	</script>
</body>
</html>
