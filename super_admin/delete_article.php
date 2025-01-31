<?php
include '../admin/db_conn.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM  article_post WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Article deleted successfully";
        header("Location: articles.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
