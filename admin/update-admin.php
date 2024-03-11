<?php
include "config.php";
session_start();

if(isset($_POST['submit'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];

    // Check if the current password is correct
    $sql = "SELECT * FROM admin_credentials WHERE username='{$_SESSION['admin_username']}' AND password='$current_password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Update the password
        if($new_password === $confirm_new_password) {
            $update_sql = "UPDATE admin_credentials SET password='$new_password' WHERE username='{$_SESSION['admin_username']}'";
            if ($conn->query($update_sql) === TRUE) {
                echo "<script>alert('Password updated successfully');</script>";
            } else {
                echo "<script>alert('Error updating password: " . $conn->error . "');</script>";
            }
        } else {
            echo "<script>alert('New passwords do not match');</script>";
        }
    } else {
        echo "<script>alert('Current password is incorrect');</script>";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Update Password</title>
    <link rel="stylesheet" href="path_to_your_styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f8f8;
        }

        main {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        form {
            display: grid;
            grid-gap: 10px;
        }

        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #f8f8f8;
            color: #333;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #e8e8e8;
        }

        @media only screen and (max-width: 600px) {
            main {
                width: 90%;
                padding: 10px;
            }
        }
        footer{
            position:fixed;
            bottom:0;
        }
        main{
            margin-top: -8%;
        }
    </style>
</head>

<body>
    <header class="navbar transparent" id="navbar">
        <a href="admin-portal.php" class="hx-le">Back</a>
        <div class="hx-ri">
            <h1 id="hd">Admin - Update Password</h1>
        </div>
    </header>
    <main>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="current_password">Current Password:</label><br>
            <input type="password" id="current_password" name="current_password" required><br><br>
            <label for="new_password">New Password:</label><br>
            <input type="password" id="new_password" name="new_password" required><br><br>
            <label for="confirm_new_password">Confirm New Password:</label><br>
            <input type="password" id="confirm_new_password" name="confirm_new_password" required><br><br>
            <input type="submit" name="submit" value="Update">
        </form>
    </main>
    <footer>
        <!-- Your footer content here -->
    </footer>
</body>

</html>
