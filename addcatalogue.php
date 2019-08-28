<?php
require_once './database.php';

       if( isset($_POST['cname'], $_POST['cdescription']) ){ 
        $sql = "INSERT INTO Catalogue(cname, cdescription)
                values(:cname, :cdescription)";
        $stmt= $pdo->prepare($sql);
        $stmt->bindValue(':cname', $_POST['cname'], PDO::PARAM_STR);      
        $stmt->bindValue(':cdescription', $_POST['cdescription'], PDO::PARAM_STR);
        $pdoExec = $stmt->execute();

        if($pdoExec)
        {
            echo 'Data Inserted';
        }else{
            echo 'Data Not Inserted';
        }
    }

        
        

?>
<br>

<form action = "addcatalogue.php" method = "post">
    <fieldset class = "fitContent">
        <legend>Add Catalogue</legend>
        
        <br>Name<br>
        <input type="text" name="cname"   required />
        <br>Description<br>
        <textarea name="cdescription" ></textarea>
        <br><br>
        <input type="submit" value="Add" /><br>
        
    </fieldset>
    
</form>
</body>
</html>

