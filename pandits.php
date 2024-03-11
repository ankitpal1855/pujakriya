<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pooja Kriya - Pandits</title>
    <?php include 'common.php'; ?>
    <link rel="stylesheet" href="styles/pandits.css">
    <style>
        .grid-container {
            display: grid;
            grid-gap: 10%;
        }

        .grid-item {
            background-color: goldenrod;
            border-radius: 20px;
            padding: 20px;
            height: 60vh;
            text-align: center;
            font-size: 30px;
        }

        .grid-item img{
            height: 38vh;
            width:100%;
        }

        .grid-item h2, .grid-item h3, .grid-item p{
            font-size: smaller;
        }

        main {
            margin: 2% 5% 10% 5%;
        }

        @media screen and (min-width: 600px) {
            .grid-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media screen and (max-width: 599px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
        <div class="grid-container">
            <?php
            include 'admin/config.php';

            // Fetch data from database
            $sql = "SELECT * FROM pandits_data_pk";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="grid-item">
                    <div class="top">
                        <img src="admin/'.$row['photo'].'" alt="##pandit image">
                    </div>
                    <div class="bottom">
                        <h2>'.$row['name'].'</h2>
                        <h3>'.$row['age'].'</h3>
                        <h3>'.$row['qualification'].'</h3>
                        <p>'.$row['experience'].'</p>
                        <p>'.$row['description'].'</p>
                    </div>
                </div>';
                }
            } else {
                echo "<h1 style='color:#fff; background-color:transparent; text-align:center; width:90vw;'>No records found</h1>";
            }
            $conn->close();
            ?>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>