<?php
session_start();
include("../admin/db_conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Fetch the image path to delete it from the server
    $query = "SELECT image FROM news WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $news = $result->fetch_assoc();

    if ($news && !empty($news['image']) && file_exists($news['image'])) {
        unlink($news['image']); // Delete the image file
    }

    // Delete the news entry from the database
    $deleteQuery = "DELETE FROM news WHERE id = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: news.php?msg=News deleted successfully");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    die("Invalid request.");
}
?>
