<?php 
    include("catalogue.php");
    include("item.php");
?>
<table class="tbl">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Status</th>
        <th>Size</th>              
        <th>Image</th> 
        <th>Options</th>
    </tr>
    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
    {
        $iId = $row['iid'];
        $iName = $row['iname'];
        $iDescription = $row['idescription'];
        $iPrice = $row['iprice'];
        $iStatus = $row['istatus'];
        $iSize = $row['isize'];
        $iImage = $row['iimage'];
        $link_image = "./images/item/$iImage";             
        echo "<tr>";
        echo "<td>$iId</td>";
        echo "<td>$iName</td>";
        echo "<td>$iDescription</td>";
        echo "<td>$iPrice</td>";
        echo "<td>$iStatus</td>";
        echo "<td>$iSize</td>";
        echo "<td ><img src='$link_image' width='200px'></td>";
        ?>
        <td>
            <form class="frminline" action="deleteitem.php" method="post" onsubmit="return confirmDelete();">
                <input type="hidden" name="iId" value="<?php echo $row[0] ?>" />
                <input type="submit" value="Delete" />
            </form>
            <form class="frminline" action="updateitem.php" method="post">
                <input type="hidden" name="iId" value="<?php echo $row[0] ?>" />
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