<html>
    <head>
        <meta charset="UTF-8">
        <title>testheroku</title>
    </head>
    <body>
        <?php
            $servername = "ec2-54-227-245-146.compute-1.amazonaws.com";
            $username = "oovwrvolhffwkp";
            $password = "699e9667b9d3b149280d7dee6050728e6b4272087a3fb95b6d19d3173208b001";
            $dbname = "darage7r31a8r";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            echo "done!!!!!!";

            $sql = "SELECT cName, cDescription from Catalogue";
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



