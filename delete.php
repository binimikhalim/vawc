<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `manage` WHERE id = $id ";
$result = mysqli_query($conn, $sql);
if($result) {
    header("Location: manage.php?msg=Record deleted succesfully!");

} else {
    echo "Failed: " . mysqli_error($conn);
}
?>