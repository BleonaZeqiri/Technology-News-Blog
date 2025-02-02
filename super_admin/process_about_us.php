<?php
session_start();
include("../admin/db_conn.php");

if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
    $user_role = $_SESSION['role'];  

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = $_POST['action'];

        if ($action === 'create') {
            $title = $_POST['title'];
            $content = $_POST['content'];

            $query = "INSERT INTO about_us (user_id, title, content) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("iss", $user_id, $title, $content);

            if ($stmt->execute()) {
                header("Location: about_us.php?success=Post created successfully");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        if ($action === 'edit') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];

            if ($user_role === 'admin') {
                // Admin can edit any post, so only check for post ID
                $query = "UPDATE about_us SET title = ?, content = ? WHERE id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ssi", $title, $content, $id);
            } else {
                // Regular user can only edit their own post
                $query = "UPDATE about_us SET title = ?, content = ? WHERE id = ? AND user_id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ssii", $title, $content, $id, $user_id);
            }

            if ($stmt->execute()) {
                header("Location: about_us.php?success=Post updated successfully");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        if ($action === 'delete') {
            $id = $_POST['id'];

            if ($user_role === 'admin') {
                $query = "DELETE FROM about_us WHERE id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("i", $id);
            } else {
                $query = "DELETE FROM about_us WHERE id = ? AND user_id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ii", $id, $user_id);
            }

            if ($stmt->execute()) {
                header("Location: about_us.php?success=Post deleted successfully");
                exit();
            } else {
                echo "Error deleting post: " . $stmt->error;
                exit();  
            }
        }
    }
} else {
    header("Location: ../admin/index.php");
    exit();
}
?>
