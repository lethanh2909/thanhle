<?php 
    include("database.php");    
?>
<?php	
	if( isset($_POST['cid'], $_POST['cname']))
	{
	    
	    $sql = "UPDATE Catalogue SET cname = :cname WHERE cid = :cid";
	    $stmt= $pdo->prepare($sql);
	    $stmt->bindValue(':cid', $_POST['cid'], PDO::PARAM_INT);
	    $stmt->bindValue(':cname', $_POST['cname'], PDO::PARAM_STR);
	    $pdoExec = $stmt->execute();
	    
	        // check 
	    if($pdoExec)
	    {
	        die("You've updated the Catalogue '$cid' <a href='managecatalogue.php'>click here</a> to continue.");
	    }else{
	        echo 'Data Not updated';
	    }
	}    
?>