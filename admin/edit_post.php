<?php
session_start();
include("db_conn.php");

if (isset($_SESSION['id']) && isset($_GET['id'])) {
    $post_id = $_GET['id'];
    $user_id = $_SESSION['id'];

    $query = "SELECT * FROM posts WHERE id = ? AND user_id = ?";
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
<html>
<head>
    <title>Edit Post</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        h1, h2 {
            color: #333;
        }
        a {
            text-decoration: none;
            color: #fff;
            background-color: #ff6b6b;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #ff5252;
        }
        form {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        textarea {
            resize: none;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        th, td {
            text-align: left;
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .actions form {
            margin: 0;
        }
    </style>
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
        
        <button type="submit" name="action" value="edit">Update Post</button>
    </form>
    <a href="home.php">Back to Home</a>
</body>
</html>
