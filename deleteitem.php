<?php 
    include("database.php");
?>
<?php	
	if( isset($_POST['iid']) ){
    
    $sql = "DELETE FROM Item WHERE iid = :iid";
    $stmt= $pdo->prepare($sql);
    $stmt->bindValue(':iid', $_POST['iid'], PDO::PARAM_INT);
    $stmt->execute();
    die("You've deleted the item '$iid' <a href='manageitem.php'>click here</a> to continue.");
}
?>