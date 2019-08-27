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

            $conn = new PDO("pgsql:" . sprintf(
                "host=%s;port=%s;user=%s;password=%s;dbname=%s",
                $db["host"],
                $db["port"],
                $db["user"],
                $db["pass"],
                ltrim($db["path"], "/")
            ));
            echo "done!!!!!!";

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
        // Sử đụng Prepare 
        $stmt = $conn->prepare("SELECT cName, cDescription from Catalogue"); 
         
        // Thực thi câu truy vấn
        $stmt->execute();
     
        // Khai báo fetch kiểu mảng kết hợp
        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
         
        // Lấy danh sách kết quả
        $result = $stmt->fetchAll();
         
        // Lặp kết quả
        foreach ($result as $item){
            echo $item['cName'] . ' - '. $item['cDescription'];
        }
            




        ?>
        
    </body>
</html>



