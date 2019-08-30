<?php 
    include("database.php");    
?>
<?php
	if(isset($_POST['iid'], $_POST['iname'], $_POST['iprice'], $_POST['istatus'], $_POST['isize']))
	{
	    $sql = "UPDATE Item SET iid = :iid, iname = :iname, iprice = :iprice, istatus = :istatus, isize = :isize WHERE iid = :iid";
	    
	    $stmt = $pdo->prepare($sql);
	    $stmt->bindValue(':iid', $_POST['iid'], PDO::PARAM_INT);
	    $stmt->bindValue(':iname', $_POST['iname'], PDO::PARAM_STR);
	    
	    $stmt->bindValue(':iprice', $_POST['iprice'], PDO::PARAM_STR);
	    $stmt->bindValue(':istatus', $_POST['istatus'], PDO::PARAM_STR);
	    $stmt->bindValue(':isize', $_POST['isize'], PDO::PARAM_STR);
	    $pdoExec = $stmt->execute();
	    
	        // check 
	    if($pdoExec)
	    {
	        die("You've updated the Item '$cid' <a href='manageitem.php'>click here</a> to continue.");
	    }else{
	        echo 'Data Not updated';
	    }
	}
	

?>
