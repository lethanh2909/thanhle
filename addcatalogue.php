<?php
require_once './database.php';
if (isset($_POST['cName'])) {
    $cName = sanitizeString($_POST['cName']);
    $cDescription = sanitizeString($_POST['cDescription']);
    $error = $message = "";
    
        $data = [
                    'cname' => $cName,
                    'cdescription' => $cDescription,                    
                ];
        $sql = "INSERT INTO Catalogue(cname, cdescription)"
                . "values('$cName' , '$cDescription')";
        $stmt= $pdo->prepare($sql);
        

        if (!$data) {
            $error = $error."Adding error, please try again";
        } else {
            $message = $message."Added successfully";
        }  
        $stmt->execute($data);
}
?>
<br>

<form action = "addcatalogue.php" method = "post">
    <fieldset class = "fitContent">
        <legend>Add Catalogue</legend>
        <span class="error"><?php echo $error; ?></span><br>
        Name<br>
        <input type="text" name="cName"   required /><br>
        Description<br>
        <textarea name="cDescription" ></textarea>
        <br><br>
        <input type="submit" value="Add" /><br>
        <span><?php echo $message; ?></span><br>
    </fieldset>
    
</form>
</body>
</html>

