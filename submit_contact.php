<?php
include '../../htdocs/Technology-News-Blog/admin/db_conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (empty($first_name) || empty($last_name) || empty($email) || empty($mobile) || empty($message)) {
        echo "All fields are required!";
        exit;
    }

    $sql = "INSERT INTO contacts (first_name, last_name, email, mobile, message, submitted_at)
            VALUES ('$first_name', '$last_name', '$email', '$mobile', '$message', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "Your message has been successfully submitted!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request method!";
}
?>
