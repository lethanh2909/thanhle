<html>
    <head>
        <meta charset="UTF-8">
        <title>testheroku</title>
    </head>
    <body>
        <?php
            
            $db = parse_url(getenv("DATABASE_URL"));

            $pdo = new PDO("pgsql:" . sprintf(
                "host=%s;port=%s;user=%s;password=%s;dbname=%s",
                $db["host"],
                $db["port"],
                $db["user"],
                $db["pass"],
                ltrim($db["path"], "/")
            ));
            echo "done!!!!!!";

            $sql = $pdo->query("SELECT cName, cDescription from Catalogue");
            $result = mysqli_query($sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["cName"]. " - Name: " . $row["cDescription"]. " " . $row["cName"]. "<br>";
                }
            } else {
                echo "0 results";
            }




        ?>
        
    </body>
</html>



