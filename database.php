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