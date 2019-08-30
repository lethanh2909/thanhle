<?php 
    include("catalogue.php");
?>
<table class="tbl">
    <tr>
        <th> ID</th>
        <th> Name</th>
        <th> Options</th>
    </tr>
    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $cId = $row['cid'];
        $cName = $row['cname'];
        $cDescription = $row['cdescription'];
        echo "<tr>";
        echo "<td>$cId</td>";
        echo "<td>$cName</td>";
        ?>

        <td>
            <form class="frminline" action="deletecatalogue.php" method="post" onsubmit="return confirmDelete();">
                <input type="hidden" name="cid" value="<?php echo $row['cid'] ?>" />
                <input type="submit" value="Delete" />
            </form>
        </td>
        <td>
            <form class="frminline" action="" method="post">
                <input type="text" id="cName" name="cName" required value="<?php echo $cName; ?>" />
                <input type="submit" value="Update" />
            </form>
        </td>
        <?php
        echo "</tr>";
    }
    ?>
    <script>
        function confirmDelete() {
            var r = confirm("Are you sure you would like to delete ?");
            if (r) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</table>