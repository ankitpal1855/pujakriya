<?php
include "config.php";
if(isset($_POST['submit'])) {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the admin credentials exist
    $sql = "SELECT * FROM admin_credentials WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Valid credentials
        header("Location: admin-portal.php");
        exit(); // Make sure to exit after redirecting
    } else {
        // Invalid credentials
        echo "<script>alert('Oh no! Invalid credentials');</script>";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pooja Kriya</title>

    <link rel="icon" href="../images/laxmi.jpg" type="image/x-icon">
    <!-- linking css -->
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/header.css">

    <style>

    main {
        text-align: center;
        width: 40%;
        margin: 0% 30%;
        background-color: rgba(71, 32, 0, 0.5);
        border: 1px solid #fff;
        max-width: 40%;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    main h2{
        color: #fff;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        margin-bottom: 10px;
    }

    label{
        color: #fff;
    }

    input[type="submit"] {
        background-color: rgba(71, 32, 0, 0.5);
        color: #ccc;
        cursor: pointer;
        transition: background-color 0.3s;
        padding: 10px 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: darkgoldenrod;
    }
    footer{
        position: fixed;
        bottom: 0;
    }
    </style>

</head>

<body>
    <?php @include "header.php"; ?>

    <header class="navbar transparent" id="navbar">
        <a href="../index.php" class="hx-le">
            <img src="../images/venketeshwara.jpg" alt="icon">
            <h1 id="hd">POOJA KRIYA</h1>
        </a>
        <div class="hx-ri">
            <a href="../index.php" class="hx-lk">HOME</a>
            <a href="../gallery.php" class="hx-lk">GALLERY</a>
            <a href="../about.php" class="hx-lk">ABOUT</a>
            <a href="../poojas.php" class="hx-lk">POOJAS</a>
        </div>
    </header>
    <main id="main">
        <h2>Admin Login</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" id="sub-login" name="submit" value="Login">
        </form>
    </main>
    <footer>
        <div id="froaontd-olm">
            <div>
                <a class="underline-hover" href="../about.php">About</a>
                <a class="underline-hover" href="../havan.php">Havan</a>
                <a class="underline-hover" href="../services.php">Services</a>
            </div>
            <div>
                <a class="underline-hover" href="../contact.php">Contact Us</a>
                <a class="underline-hover" href="../gallery.php">Gallery</a>
                <a class="underline-hover" href="../policies.php">Policy</a>
            </div>
            <div>
                <a class="underline-hover" href="../poojas.php">Poojas</a>
                <a class="underline-hover" href="../pandits.php">Pandits</a>
                <a class="underline-hover" href="../sitemap.php">Sitemap</a>
            </div>
        </div>
        <div id="froaontd-orm">
            <div id="oanpeple">
                <h3>Follow us on:</h3>
            </div>
            <div id="tawpople">
                <p>developed by <a style="color:#aaa" href="https://www.kirawebsteria.in">Websteria</a></p>
                <p>2024 © All Rights Reserved</p>
            </div>
            <div id="tahprpelee">
                <img src="../images/laxmi.jpg" id="icon2" alt="">
                <h1>POOJA KRIYA</h1>
            </div>
        </div>
    </footer>

</body>

</html>
