<?php
session_start();
include("db_conn.php");

if (isset($_SESSION['id']) && isset($_GET['id'])) {
    $post_id = $_GET['id'];
    $user_id = $_SESSION['id'];

    $query = "SELECT * FROM about_us WHERE id = ? AND user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $post_id, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $post = $result->fetch_assoc();
    } else {
        echo "Post not found or you don't have permission to edit it.";
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link rel="stylesheet" type="text/css" href="../admin/style.css">
    <link rel="stylesheet" href="../admin/css/user.css?v=1.0">
    <link rel="stylesheet" href="style/edit.css">

</head>
<body>
    <h1>Edit Post</h1>
    <form action="process_about_us.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
        
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>
        
        <label for="content">Content:</label>
        <textarea name="content" id="content" rows="4" required><?php echo htmlspecialchars($post['content']); ?></textarea>
        
      
        <button type="submit" name="action" value="edit" class="button">Update Post</button>
    </form>
    <a href="about_us.php" class="button">Back to Home</a>
</body>
</html>
