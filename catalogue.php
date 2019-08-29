 
<?php
    require_once './database.php';
    $sql = "SELECT cid, cname, cdescription from Catalogue";
        $stmt = $pdo->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        //$stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
    
?>
