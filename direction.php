<?php 
    if(isset($_GET['direct'])){$tham_so=$_GET['direct'];}else{$tham_so="";}
    switch($tham_so)
    {
        case "show_product":
            include("item.php");
        break;
        
        case "product_detail":
            include("");
        break;
                
        
    default:
            echo "Choose product";
    }
?>