<?php 
    include("database.php");
?>
<?php	
	if( isset($_POST['cid']) ){
    
    $sql = "DELETE FROM Catalogue WHERE cid = :cid";
    $stmt= $pdo->prepare($sql);
    $stmt->bindValue(':cid', $_POST['cid'], PDO::PARAM_INT);
    $stmt->execute();
    die("You've deleted the CCatalogue '$cid' <a href='managecatalogue.php'>click here</a> to continue.");
}
?>