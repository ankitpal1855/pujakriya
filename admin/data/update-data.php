<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Update Pandit Details</title>
    <!-- linking css -->
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <style>
        form{
            width: 40%;
            max-width: 40%;
            margin: 2% 30%;
            background-color: rgba(71, 32, 0, 0.5);
            border: 1px solid #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        label{
            color: #fff;
        }
        main h2{
            text-align: center;
            color: #fff;
            margin: 10px;
        }
        label,
        input,
        textarea {
            width: 100%;
            height: 35px;
            display: block;
            margin-bottom: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #f8f8f8;
            color: #333;
            cursor: pointer;
            border: 1px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: darkgoldenrod;
            color: #fff;
        }

        @media only screen and (max-width: 600px) {
            form {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <header class="navbar transparent" id="navbar">
        <a href="../../index.php" class="hx-le">
            <img src="../../images/venketeshwara.jpg" alt="icon">
            <h1 id="hd">POOJA KRIYA</h1>
        </a>
        <div class="hx-ri">
            <a href="../../index.php" class="hx-lk">HOME</a>
            <a href="../../gallery.php" class="hx-lk">GALLERY</a>
            <a href="../../about.php" class="hx-lk">ABOUT</a>
            <a href="../../poojas.php" class="hx-lk">POOJAS</a>
        </div>
    </header>
    <main>
        <h2>Update Pandit Details</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <input type="text" id="name" name="name" placeholder="Pandit Name" required><br>
            <input type="number" id="age" name="age" placeholder="Age" required><br>
            <input type="text" id="qualification" name="qualification" placeholder="Qualification" required><br>
            <input type="number" id="experience" name="experience" placeholder="Experience" required><br>
            <input type="file" id="photo" name="photo" required><br>
            <textarea id="description" name="description" placeholder="Description" required></textarea><br>
            <input type="submit" name="submit" value="Update">
        </form>
    </main>
    <footer>
        <div id="froaontd-olm">
            <div>
                <a class="underline-hover" href="../../about.php">About</a>
                <a class="underline-hover" href="../../havan.php">Havan</a>
                <a class="underline-hover" href="../../services.php">Services</a>
            </div>
            <div>
                <a class="underline-hover" href="../../contact.php">Contact Us</a>
                <a class="underline-hover" href="../../gallery.php">Gallery</a>
                <a class="underline-hover" href="../../policies.php">Policy</a>
            </div>
            <div>
                <a class="underline-hover" href="../../poojas.php">Poojas</a>
                <a class="underline-hover" href="../../pandits.php">Pandits</a>
                <a class="underline-hover" href="../../sitemap.php">Sitemap</a>
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
                <img src="../../images/laxmi.jpg" id="icon2" alt="">
                <h1>POOJA KRIYA</h1>
            </div>
        </div>
    </footer>
</body>

</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pooja_kriya_dbms";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $description = $_POST['description'];

    // Check if a file was uploaded
    if (isset($_FILES['photo'])) {
        $photo = $_FILES['photo']['name'];
        $photo_tmp = $_FILES['photo']['tmp_name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($photo);

        // Move uploaded file to destination folder
        if (move_uploaded_file($photo_tmp, $target_file)) {
            // Update query
            $sql = "UPDATE pandit_data_pk SET age='$age', qualification='$qualification', experience='$experience', description='$description', photo='$photo' WHERE name='$name'";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Record updated successfully');</script>";
            } else {
                echo "<script>alert('Error updating record: " . $conn->error . "');</script>";
            }
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        }
    }
}

$conn->close();
?>