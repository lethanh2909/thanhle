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
                <p class="w3-xlarge w3-serif " style="text-decoration: underline " align="middle">__________________________________CATALOGUE__________________________________</p>             

                <?php 
                    include("catalogue.php");
                ?>

                <?php
                echo "<table >";
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
                {    
                    echo "<tr>";
                        for($i=1;$i<=7;$i++)
                        {
                            echo "<td width='78px'>";
                                if($row!=false)
                                {
                                    $ID = $row ['cid'];
                                    $link="?direct=show_product&id=".$ID;        
                                    echo "<a href='$link' class='w3-button w3-green w3-border w3-round-large'>" ;
                                    $Name = $row ['cname'];                                               
                                    echo "$Name";
                                }
                                 else 
                                {
                                    echo "&nbsp;";
                                }
                            echo "</td>";

                            if($i!=7)
                            {
                                $row = $stmt->fetch();
                            }
                        }
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
        </div>
    </div>
    
  <!-- Product container-->  
    <div class="w3-bottombar">
        <?php 
            include("direction.php");
        ?>

       <?php
        echo "<table>";                
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
            {    
                echo "<tr>";
                    for($i=1;$i<=3;$i++)
                    {
                        echo "<td align='center' width='328px' height='228px' >";
                            if($row!=false)
                            {
                                $iId = $row['iid'];
                                $iName = $row['iname'];
                                $iDescription = $row['idescription'];
                                $iPrice = $row['iprice'];
                                $iStatus = $row['istatus'];
                                $iSize = $row['isize'];
                                $iImage = $row['iimage'];
                                $link_image = "./images/item/$iImage";
                                //$link_detail="?direct=product_detail&id=".$iId;

                                echo "<a href='$link_detail'>";
                                echo "<img src='$link_image' width='200px'>";
                                echo "</a>";
                                echo "<br>";  

                                
                                echo $iName;
                                echo "</a>";
                                echo "<br>";  

                                echo "Price: ".$iPrice," $";
                                echo "<br>";
                            }
                             else 
                            {
                                echo "&nbsp;";
                            }
                        echo "</td>";
                        if($i!=3)
                        {
                            $row = $stmt->fetch();
                        }
                    }
                echo "</tr>";
            }
        echo "</table>";
        ?>        
    </div> 
    <!--End of Product container-->
    