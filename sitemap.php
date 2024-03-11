<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pooja Kriya - Sitemap</title>

    <?php include 'common.php'; ?>

    <!-- <link rel="stylesheet" href="styles/sitemap.css"> -->
    <script src='scripts/main.js'></script>

    <style>
        main{
            margin-top: 70px;
            width: 100%;
            height: 65vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }

        #seccy{
            width: 80%;
            height: 60vh;
            border-radius: 20px;
            display: flex;
            padding: 10px 0px;
            background-color: rgba(71,32,0,0.2);
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }

        #seccy2{
            width: 95%;
            height: 60vh;
            border-radius: 20px;
            border: 1px solid #fff;
            display: flex;
            background-color: rgba(71, 32, 0, 0.4);
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }

        .linkBox{
            width: 90%;
            display: flex;
            justify-content: space-evenly;
        }

        .link{
            width: 30%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px #fff solid;
            padding: 1%;
            background: linear-gradient(rgba(247, 175, 19,0.5),rgba(71, 32, 0, 0.9));
        }

        .link a{
            color: white;
        }

        #sitemap{
            margin: -15px;
            color: #f7e013;
        }

        .left-links{
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
        }

        .right-links{
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .link:hover{
            transform: scaleY(1.1);
            background: linear-gradient(#8f4c00,rgb(71, 32, 0));
        }
    </style>
</head>
<body>
    <?php @include "header.php"; ?>
    <main>
        <section id="seccy">
            <section id="seccy2">
                <h1 id="sitemap">----------- Sitemap -----------</h1>
                <div class="linkBox">
                    <div class="link left-links">
                        <a href="about.php">About</a>
                    </div>
                    <div class="link">
                        <a href="havan.php">Havan</a>
                    </div>
                    <div class="link right-links">
                        <a href="services.php">Services</a>
                    </div>
                </div>
                <div class="linkBox">
                    <div class="link left-links">
                        <a href="contact.php">Contact Us</a>
                    </div>
                    <div class="link">
                        <a href="gallery.php">Gallery</a>
                    </div>
                    <div class="link right-links">
                        <a href="policies.php">Policy</a>
                    </div>
                </div>
                <div class="linkBox">
                    <div class="link left-links">
                        <a href="poojas.php">Poojas</a>
                    </div>
                    <div class="link">
                        <a href="pandits.php">Pandits</a>
                    </div>
                    <div class="link right-links">
                        <a href="sitemap.php">Sitemap</a>
                    </div>
                </div>
                <div class="linkBox">
                    <div class="link left-links">
                        <a href="index.php">Homepage</a>
                    </div>
                    <div class="link right-links">
                        <a href="admin/admin-login.php">Admin Site</a>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <?php @include "footer.php"; ?>
</body>
</html>