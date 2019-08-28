<?php
require_once './database.php';

if(isset($_POST['insert']))
{
    
    catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

    // get values form input text and number
    
    $iid = $_POST['iid'];
    $iname = $_POST['iname'];
    $idescription = $_POST['idescription'];
    $iprice = $_POST['iprice'];
    $istatus = $_POST['istatus'];
    $isize = $_POST['isize'];    
    $iimage = "";
    $extension = "";
    
    if (isset($_FILES['iimage']) && $_FILES['iimage']['size'] != 0) {
        $temp_name = $_FILES['iimage']['tmp_name'];
        $name = $_FILES['iimage']['name'];
        $parts = explode(".", $name);
        $lastIndex = count($parts) - 1;
        $extension = $parts[$lastIndex];
        $iImage = "$iid.$extension";
        $destination = "./images/item/$iimage";
        //Move the file from temp loc => to our image folder
        move_uploaded_file($temp_name, $destination);

    $catalogueid = $_POST['catalogueid'];
        
    // mysql query to insert data

    $sql = "INSERT INTO item (iid, iname, idescription, iprice, istatus, isize, iimage, catalogueid) VALUES (:iid, :iname, :idescription, :iprice, :istatus, :isize, :iimage, :catalogueid)";
    
    $stmt = $pdo->prepare($sql);
    
    $pdoExec = $stmt->execute();
    
        // check if mysql insert query successful
    if($pdoExec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
}


?>

<!DOCTYPE html>

<html>

    <head>

        <title>add item</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <form action="php_insert_data_in_mysql_database_using_pdo.php" method="post">

            <input type="text" name="iid" required placeholder="ID"><br><br>

            <input type="text" name="iname" required placeholder="Name"><br><br>

            <input type="text" name="idescription" required placeholder="description"><br><br>

            <input type="number" name="iprice" required placeholder="iprice"><br><br>

            <input type="text" name="istatus" required placeholder="status"><br><br>

            <input type="text" name="isize" required placeholder="size"><br><br>

            <input type="file" name="iImage" required placeholder="Image"><br>

            <select name="catalogueId">
            <?php
                $query = "SELECT cid, cname FROM Catalogue";
                $batches = queryMysql($query);
                while ($batch = mysqli_fetch_array($batches)) {
                    $cId = $batch[0];
                    $cName = $batch[1];
                    echo "<option value='$cId'>$cName</option>";
                }
            ?>
            </select><br><br>

            <input type="submit" name="insert" value="Insert Data">

        </form>

    </body>

</html>