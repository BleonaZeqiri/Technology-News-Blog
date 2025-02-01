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

            $image_path = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image_name = $_FILES['image']['name'];
                $image_tmp_name = $_FILES['image']['tmp_name'];
                $image_size = $_FILES['image']['size'];
                $image_error = $_FILES['image']['error'];

                $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
                if (in_array($image_extension, $allowed_extensions) && $image_size < 5000000) {
                    $new_image_name = uniqid('post_', true) . '.' . $image_extension;
                    $upload_dir = '../admin/uploads/images/';
                    $image_path = $upload_dir . $new_image_name;

                    if (move_uploaded_file($image_tmp_name, $image_path)) {
                        echo "Image uploaded successfully.";
                    } else {
                        echo "Error uploading image.";
                    }
                } else {
                    echo "Invalid image file.";
                    exit();
                }
            }

            $query = "INSERT INTO news (user_id, title, content, image) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("isss", $user_id, $title, $content, $image_path);

            if ($stmt->execute()) {
                header("Location: news.php?success=Post created successfully");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        if ($action === 'edit') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];

            $image_path = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image_name = $_FILES['image']['name'];
                $image_tmp_name = $_FILES['image']['tmp_name'];
                $image_size = $_FILES['image']['size'];
                $image_error = $_FILES['image']['error'];

                $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
                if (in_array($image_extension, $allowed_extensions) && $image_size < 5000000) {
                    $new_image_name = uniqid('post_', true) . '.' . $image_extension;
                    $upload_dir = '../admin/uploads/images/';
                    $image_path = $upload_dir . $new_image_name;

                    if (move_uploaded_file($image_tmp_name, $image_path)) {
                        echo "Image uploaded successfully.";
                    } else {
                        echo "Error uploading image.";
                        exit();
                    }
                } else {
                    echo "Invalid image file.";
                    exit();
                }
            }

            if ($image_path) {
                if ($user_role === 'admin') {
                    $query = "UPDATE news SET title = ?, content = ?, image = ? WHERE id = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("sssi", $title, $content, $image_path, $id);
                } else {
                    $query = "UPDATE news SET title = ?, content = ?, image = ? WHERE id = ? AND user_id = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("sssii", $title, $content, $image_path, $id, $user_id);
                }
            } else {
                if ($user_role === 'admin') {
                    $query = "UPDATE news SET title = ?, content = ? WHERE id = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("ssi", $title, $content, $id);
                } else {
                    $query = "UPDATE news SET title = ?, content = ? WHERE id = ? AND user_id = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("ssii", $title, $content, $id, $user_id);
                }
            }

            if ($stmt->execute()) {
                header("Location: news.php?success=Post updated successfully");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        }

     
if ($action === 'delete') {
    $id = $_POST['id'];

    if ($user_role === 'admin') {
        $query = "DELETE FROM news WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
    } else {
        $query = "DELETE FROM news WHERE id = ? AND user_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ii", $id, $user_id);
    }

    if ($stmt->execute()) {
        header("Location: news.php?success=Post deleted successfully");
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
