<?php 
    include("database.php");
?>
<?php	
	if( isset($_POST['cid']) ){
    
    $sql = "DELETE FROM Catalogue WHERE cid = '$cid'";
    $stmt= $pdo->prepare($sql);
    $stmt->bindValue(':cid', $_POST['cid'], PDO::PARAM_STR);
    $pdoExec = $stmt->execute();
    
}
?>