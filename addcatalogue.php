<?php
require_once './database.php';

        $sql = "INSERT INTO Catalogue(cname, cdescription)"
                . "values(:cname, :cdescription)";
        $stmt= $pdo->prepare($sql);
        $stmt->bindParam(':cname', $_POST['cname'], PDO::PARAM_STR);      
        $stmt->bindParam(':cdescription', $_POST['cdescription'], PDO::PARAM_STR);
        $stmt->execute(); 

        if (!$resultSet) {
            $error = $error."Adding error, please try again";
        } else {
            $message = $message."Added successfully";
        }  
        

?>
<br>

<form action = "addcatalogue.php" method = "post">
    <fieldset class = "fitContent">
        <legend>Add Catalogue</legend>
        <span class="error"><?php echo $error; ?></span><br>
        Name<br>
        <input type="text" name="cname"   required /><br>
        Description<br>
        <textarea name="cdescription" ></textarea>
        <br><br>
        <input type="submit" value="Add" /><br>
        <span><?php echo $message; ?></span><br>
    </fieldset>
    
</form>
</body>
</html>

