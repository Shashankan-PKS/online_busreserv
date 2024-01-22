<?php
    include "../../config.php";
?>

<table class="table" style="border-collapse:collapse;">
    <tr style="background:blue; color: white; border: 1px solid gray;">
        <td>Bus Number</td>
        <td>From </td>
        <td>Destination</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php   
        $sql= "select * from buses";
        $res=$con->query($sql);
        if($res->num_rows>0){
            while ($row = $res->fetch_assoc()){
                echo "<tr>";
                echo "<td>{$row["busnum"]}</td>";
                echo "<td>{$row["source"]}</td>";
                echo "<td>{$row["destination"]}</td>";
                echo "<td><button class='edit updt' data-id='{$row['id']}'><i class='fa-solid fa-pen-to-square'></i></button></td>";
                echo "<td><button class='dlt del' data-id='{$row['id']}'><i class= 'fa-solid fa-trash' ></i></button></td>";
                echo "</tr>";
            }
        }
    ?>

</table>