<?php
require_once './database.php';

if(isset($_POST['iid'], $_POST['iname'], $_POST['idescription'], $_POST['iprice'], $_POST['istatus'], $_POST['isize'], $_POST['catalogueid']))
{
    $iimage = "";
    $extension = "";
    
    if (isset($_FILES['iimage']) && $_FILES['iimage']['size'] != 0) {
        $temp_name = $_FILES['iimage']['tmp_name'];
        $name = $_FILES['iimage']['name'];
        $parts = explode(".", $name);
        $lastIndex = count($parts) - 1;
        $extension = $parts[$lastIndex];
        $iimage = "$iid.$extension";
        $destination = "./images/item/$iimage";
        //Move the file from temp loc => to our image folder
        move_uploaded_file($temp_name, $destination);
    }
    
   
    
        
    // mysql query to insert data

    $sql = "INSERT INTO Item (iid, iname, idescription, iprice, istatus, isize, iimage, catalogueid) 
                    values (:iid, :iname, :idescription, :iprice, :istatus, :isize, :iimage, :catalogueid)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':iid', $_POST['iid'], PDO::PARAM_STR);
    $stmt->bindValue(':iname', $_POST['iname'], PDO::PARAM_STR);
    $stmt->bindValue(':idescription', $_POST['idescription'], PDO::PARAM_STR);
    $stmt->bindValue(':iprice', $_POST['iprice'], PDO::PARAM_STR);
    $stmt->bindValue(':istatus', $_POST['istatus'], PDO::PARAM_STR);
    $stmt->bindValue(':isize', $_POST['isize'], PDO::PARAM_STR);
    $stmt->bindValue(':iimage', $_POST['iimage'], PDO::PARAM_STR);
    $stmt->bindValue(':catalogueid', $_POST['catalogueid'], PDO::PARAM_STR);
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
        <form action="additem.php" method="post">

            <input type="text" name="iid" required placeholder="ID"><br><br>

            <input type="text" name="iname" required placeholder="Name"><br><br>

            <input type="text" name="idescription" required placeholder="description"><br><br>

            <input type="number" name="iprice" required placeholder="iprice"><br><br>

            <input type="text" name="istatus" required placeholder="status"><br><br>

            <input type="text" name="isize" required placeholder="size"><br><br>

            <input type="file" name="iimage" required placeholder="Image"><br>

            <select name="catalogueid">
            <?php
                $sql = "SELECT cid, cname FROM Catalogue";
                $stmt = $pdo->prepare($sql);
                //Thiết lập kiểu dữ liệu trả về
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $resultSet = $stmt->fetchAll();
                foreach ($resultSet as $row) {
                    $cId = $row['cid'];
                    $cName = $row['cname'];
                    echo "<option value='$cId'>$cName</option>";
                }
            ?>
            </select><br><br>

            <input type="submit" value="Insert Data">

        </form>

    </body>

</html>