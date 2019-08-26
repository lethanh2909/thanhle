 
<?php
    include("database.php");
    $sql = "SELECT cId, cName, cDescription from Catalogue";
            $stmt = $pdo->prepare($sql);
            // thiet lap kieudu lieu tra ve
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();
    
    //load catalogue
    echo "<div class='side_menu'>";   
        
?>