<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pooja Kriya</title>
    <link rel="icon" href="../../images/laxmi.jpg" type="image/x-icon">
    <!-- linking css -->
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    <link rel="stylesheet" href="../../styles/header.css">

    <style>
        main {
            background-color: rgba(71, 32, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin: 2% 25%;
            max-width: 50%;
        }

        form {
            display: grid;
            grid-gap: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea,
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #f8f8f8;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            color: #333;
            background-color: #e8e8e8;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: darkgoldenrod;
        }

        .back-button {
            display: block;
            margin-bottom: 20px;
            text-align: center;
        }

        .back-button a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .back-button a:hover {
            color: #ccc;
        }

        @media only screen and (max-width: 600px) {
            main {
                width: 90%;
                padding: 10px;
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
        <div class="back-button">
            <a href="../admin-portal.php">Back</a>
        </div>
        <form method="post" action="../admin_ojkmsjek.php" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Pandit Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="text" name="qualification" placeholder="Qualification" required>
            <input type="number" name="experience" placeholder="Experience" required>
            <input type="file" name="photo" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <input type="submit" name="submit" value="Submit">
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