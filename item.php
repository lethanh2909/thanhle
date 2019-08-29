<?php
        require_once './database.php';
        //load items
        $id=$_GET['id'];
        $sql = "SELECT iid, iname, idescription, iprice, istatus, isize, iimage FROM Item where catalogueid='$id'";
        $stmt = $pdo->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        //$stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        //$resultSet = $stmt->fetchAll();
        //if (!$$resultSet){
        //    $error = "Couldn't load data, please try again.";
        //}      

//echo "<div class='item_menu'>";        
         
               
    
?>

