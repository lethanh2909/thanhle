<html>
    <head>
        <meta charset="UTF-8">
        <title>testheroku</title>
    </head>
    <body>
        <?php
            //$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=GWCourses', 'postgres', '12345678');
            //echo "done!!!!!!";
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

            $sql= "SELECT cName from Catalogue";
            $stmt = $pdo->query($sql); 
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            echo $row['cName'];
            




        ?>
        
    </body>
</html>



