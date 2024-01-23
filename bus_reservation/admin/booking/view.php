<?php
    include "../../config.php";
    $sql = "SELECT * FROM booking";
    $res = $con->query($sql);
    if($res->num_rows>0){
        echo "<table style='border-collapse:collapse;'>";
        echo "<tr style=' background:blue; color: white; border: 1px solid gray;padding:10px;'>
                <td>Sr.No</td>
                <td>bus number</td>
                <td>From Station</td>
                <td>Destination</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Seat</td>
                <td>date</td>
                <td>time</td>
                <td>Delete</td>
            </tr>";
        $i=0;
        while ($row = $res->fetch_assoc()) {
            $i++;
            echo "<tr>";
            echo " <td>{$i}</td>
                <td>{$row["busnum"]}</td>
                <td>{$row["source"]}</td>
                <td>{$row["destination"]}</td>
                <td>{$row["username"]}</td>
                <td>{$row["email"]}</td>
                <td>{$row["phone"]}</td>
                <td>{$row["seat"]}</td>
                <td>{$row["date"]}</td>
                <td>{$row["time"]}</td>
                <td><button class='dlt del' data-id='{$row['id']}'><i class= 'fa-solid fa-trash' ></i></button></td> ";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No records found";
    }
?>