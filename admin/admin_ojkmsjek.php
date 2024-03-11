<?php
include "config.php";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $description = $_POST['description'];
    $filename = $_FILES['photo']['name'];
    $tempname = $_FILES['photo']['tmp_name'];
    $folder="images/".$filename;
    move_uploaded_file($tempname,$folder);

    $query="INSERT INTO pandits_data_pk (name, age, qualification, experience, photo, description) VALUES ('$name', $age, '$qualification', '$experience', '$folder', '$description')";
    $data=mysqli_query($conn,$query);
    if ($data) {
        echo "<script>alert('Data inserted successfully');</script>";
        header("Location: admin-portal.php");
        exit();
    } else {
        echo 'failed';
    }

    $stmt->close();
}

$conn->close();
?>
