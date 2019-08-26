 
<?php
    include("database.php");
    //load database of catalogue
    $query  = "SELECT cId, cName, cDescription from Catalogue";
    $result  = queryMysql($query );
    $error1 = $msg1 = "";
    if (!$result ){
        $error1 = "Couldn't load data, please try again.";
    }
    
    //load catalogue
    echo "<div class='side_menu'>";   
        
?>