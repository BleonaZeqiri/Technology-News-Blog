<?php
require_once '../admin/db_conn.php';

$user_id = $_GET['id'];

$delete_query = "DELETE FROM users WHERE id = $user_id";
if (mysqli_query($conn, $delete_query)) {
    header("Location: register.php");  
} else {
    echo "Error deleting user: " . mysqli_error($conn);
}
?>
