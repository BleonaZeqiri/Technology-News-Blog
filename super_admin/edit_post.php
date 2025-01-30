<?php
session_start();
include("../admin/db_conn.php");

if (isset($_SESSION['id']) && isset($_GET['id'])) {
    $post_id = $_GET['id'];
    $user_id = $_SESSION['id'];

    if ($_SESSION['role'] === 'admin') {
        $query = "SELECT * FROM posts WHERE id = ?";
    } else {
        $query = "SELECT * FROM posts WHERE id = ? AND user_id = ?";
    }

    $stmt = $conn->prepare($query);

    if ($_SESSION['role'] === 'admin') {
        $stmt->bind_param("i", $post_id); 
    } else {
        $stmt->bind_param("ii", $post_id, $user_id); 
    }

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $post = $result->fetch_assoc();
    } else {
        echo "Post not found or you don't have permission to edit it.";
        exit();
    }
} else {
    header("Location: ../admin/index.php");
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
</head>
<body>
    <h1>Edit Post</h1>
    <form action="process_post.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
        
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>
        
        <label for="content">Content:</label>
        <textarea name="content" id="content" rows="4" required><?php echo htmlspecialchars($post['content']); ?></textarea>
        
        <label for="image">Image:</label>
        <?php if (!empty($post['image'])): ?>
            <div>
                <img src="uploads/<?php echo htmlspecialchars($post['image']); ?>" style="max-width: 200px;">
            </div>
        <?php endif; ?>
        <input type="file" name="image" id="image">
        
        <button type="submit" name="action" value="edit" class="button">Update Post</button>
    </form>
    <a href="home.php" class="button">Back to Home</a>
</body>
</html>
