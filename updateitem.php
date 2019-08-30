<?php 
    include("database.php");    
?>
<?php
	if(isset($_POST['iid'], $_POST['iname'], $_POST['idescription'], $_POST['iprice'], $_POST['istatus'], $_POST['isize'], $_POST['catalogueid']))
	{
	    $sql = "UPDATE Catalogue SET iname = :iname, iname=:iname, idescription=:idescription, iprice=:iprice, istatus=:istatus, isize=:isize WHERE iid = :iid";
	    $stmt= $pdo->prepare($sql);
	    $stmt = $pdo->prepare($sql);
	    $stmt->bindValue(':iid', $_POST['iid'], PDO::PARAM_STR);
	    $stmt->bindValue(':iname', $_POST['iname'], PDO::PARAM_STR);
	    $stmt->bindValue(':idescription', $_POST['idescription'], PDO::PARAM_STR);
	    $stmt->bindValue(':iprice', $_POST['iprice'], PDO::PARAM_STR);
	    $stmt->bindValue(':istatus', $_POST['istatus'], PDO::PARAM_STR);
	    $stmt->bindValue(':isize', $_POST['isize'], PDO::PARAM_STR);
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
<br><br>
<form action="updateitem.php" method="POST">
    <fieldset>
        <legend>Update Item</legend>
        <div class="error"><?php echo $error; ?></div>
        <input type="hidden" value="<?php echo $iid; ?>" name="iid"/>
        Name: </br>
        <input type="text" id="iname" name="iname" required value="<?php echo $row['iname']; ?>"/><br>
        Description: </br>
        <input type="text" id="idescription" name="idescription" required value="<?php echo $row['idescription']; ?>"/><br>
        Price: </br>
        <input type="text"  name="iprice" required value="<?php echo $row['iprice']; ?>"/><br>
        Status: </br>
        <input type="text"  name="istatus" required value="<?php echo $row['istatus']; ?>"/><br>
        Size: </br>
        <input type="text"  name="isize" required value="<?php echo $row['isize']; ?>"/><br><br>
        <input type="submit" value="Update"/>
        <div><?php echo $msg; ?></div>
    </fieldset>
</form>