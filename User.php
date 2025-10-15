<?php
function get_all_users($conn) {
    $sql = "SELECT * FROM users WHERE role = 'vawc worker'";
    $result = $conn->query($sql);

    $users = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }
    return $users;
}
?>
