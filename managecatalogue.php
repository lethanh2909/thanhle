<?php 
    include("catalogue.php");
?>
<table class="tbl">
    <tr>
        <th> Name</th>
        <th> Description</th>
        <th> Options</th>
    </tr>
    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $cName = $row['cname'];
        $cDescription = $row['cdescription'];
        echo "<tr>";
        echo "<td>$cName</td>";
        echo "<td>$cDescription</td>";
        ?>
        <td>
            <form class="frminline" action="deletecatalogue.php" method="post" onsubmit="return confirmDelete();">
                <input type="hidden" name="cid" value="<?php $ID = $row ['cid']; $link="?direct=show_product&id=".$ID; echo "<a href='$link'>" ?>" />
                <input type="submit" value="Delete" />
            </form>
            <form class="frminline" action="" method="post">
                <input type="hidden" name="cId" value="<?php echo $row['cid'] ?>" />
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