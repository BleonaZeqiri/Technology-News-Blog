<?php
require_once '../admin/db_conn.php';

$user_id = $_GET['id'];

$query = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $role = $_POST['role'];

    $update_query = "UPDATE users SET user_name='$username', password='$password', name='$name', role='$role' WHERE id=$user_id";
    if (mysqli_query($conn, $update_query)) {
        header("Location: register.php");  
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="superadmin.css?v=1.0">
</head>
<body>
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Edit User</h2>
        <form class="edit" method="POST">
            <div class="input">
                <label for="user_name">Username</label>
                <input type="text" id="user_name" name="user_name" value="<?php echo $user['user_name']; ?>" required>
            </div>
            <div class="input">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" value="<?php echo $user['password']; ?>" required>
            </div>
            <div class="input">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required>
            </div>
            <div class="input">
                <label for="role">Role</label>
                <select id="role" name="role">
                    <option value="user" <?php echo ($user['role'] == 'user') ? 'selected' : ''; ?>>User</option>
                    <option value="admin" <?php echo ($user['role'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                </select>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
