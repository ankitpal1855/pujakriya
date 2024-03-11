<!DOCTYPE html>
<html>
<head>
    <title>Pandit Details</title>
    <script>
        alert('Data added successfully !!')
    </script>
</head>
<body>
    <h1>Pandit Details</h1>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database = "pooja_kriya_dbms";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the database
    $sql = "SELECT * FROM pandits_data_pk";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<h2>Name: " . $row["name"]. "</h2>";
            echo "<p>Age: " . $row["age"]. "</p>";
            echo "<p>Qualification: " . $row["qualification"]. "</p>";
            echo "<p>Experience: " . $row["experience"]. "</p>";
            echo "<p>Description: " . $row["description"]. "</p>";
            echo "<img src='data:image/jpeg;base64,".base64_encode($row['photo'])."' /><br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>
