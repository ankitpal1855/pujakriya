<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Delete Pandit Details</title>
    <!-- linking css -->
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    <link rel="stylesheet" href="../../styles/header.css">

    <style>
        main h2{
            width: 100%;
            color: #ccc;
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        th,
        td {
            width: 20%;
        }

        th:last-child,
        td:last-child {
            width: auto;
        }

        form {
            display: inline;
        }

        .back-button {
            margin-bottom: 20px;
            text-align: center;
        }

        .back-button a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            border: 1px solid #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .back-button a:hover {
            background-color: darkgoldenrod;
            color: #fff;
        }

        main h1{
            background-color: red;
            text-align: center;
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
        <h2>Remove Pandit Details</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Qualification</th>
                <th>Experience</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
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

            // Fetch data from database
            $sql = "SELECT * FROM pandits_data_pk";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['qualification'] . "</td>";
                    echo "<td>" . $row['experience'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td><form method='post' action='" . $_SERVER['PHP_SELF'] . "'><input type='hidden' name='delete_id' value='" . $row['id'] . "'><input type='submit' name='delete' value='Delete'></form></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </main>
    <!-- <footer>
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
    </footer> -->
</body>

</html>

<?php
if (isset($_POST['delete'])) {
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

    $delete_id = $_POST['delete_id'];

    // Delete query
    $sql = "DELETE FROM pandits_data_pk WHERE id='$delete_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href = '" . $_SERVER['PHP_SELF'] . "';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>
