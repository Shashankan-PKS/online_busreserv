<?php
    include "../../config.php";
    $sql = "SELECT * FROM user_data";
    $res = $con->query($sql);
    if($res->num_rows>0){
        echo "<table style='border-collapse:collapse;'>
            <tr style=' background:blue; color: white; border: 1px solid gray;'>
                <td>Sr.No</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Delete</td>
            </tr>";
        $i=0;
        while ($row = $res->fetch_assoc()) {
            $i++;
            echo "<tr>";
            echo " <td>{$i}</td>
                <td>{$row["name"]}</td>
                <td>{$row["email"]}</td>
                <td>{$row["phone"]}</td>
                <td><button class='dlt del' data-id='{$row['id']}'><i class= 'fa-solid fa-trash' ></i></button></td> ";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No records found";
    }
?>