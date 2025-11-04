<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `tasks` WHERE id = $id ";
$result = mysqli_query($conn, $sql);
if($result) {
    header("Location: dashboard.php?msg=Record deleted succesfully!");

} else {
    echo "Failed: " . mysqli_error($conn);
}
?>