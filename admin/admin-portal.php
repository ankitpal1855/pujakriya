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
        margin-top: 80px;
        width: 100%
    }

    #admin {
        text-align: center;
        color: #fff;
    }

    #seccy2 h3 {
        color: goldenrod;
        margin: -3% 0% 2% 2%;
    }

    #seccy h1 {
        color: goldenrod;
        margin-left: 20px;
    }

    #seccy2 {
        padding: 5% 2%;
        width: 85%;
        margin: 2% 7.5%;
        border-radius: 10px;
        border: 1px #ccc solid;
        display: flex;
        flex-direction: column;
    }

    #myxyz {
        display: flex;
        width: 100%;
        justify-content: space-evenly;
    }

    footer {
        position: fixed;
        bottom: 0;
    }

    .link {
        background: linear-gradient(rgba(247, 175, 19, 0.5), rgba(71, 32, 0, 0.9));
        border-radius: 10px;
        border: 1px #fff solid;
        padding: 2% 7%;
    }

    .link:hover {
        transform: scaleY(1.1);
        background: linear-gradient(#8f4c00, rgb(71, 32, 0));
    }

    .link a {
        color: #fff;
    }

    #myyyy {
        position: fixed;
        right: 10px;
        color: #fff;
    }

    #myyyy:hover {
        color: blue;
    }
    </style>

</head>

<body>
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
        <section id='seccy'>
            <h2 id='admin'>----------- ADMIN -----------</h2>
            <h1>Welcome Mr. 'Abhay Singh Chauhan'</h1>
            <section id='seccy2'>
                <h3>What do you want to do?</h3>
                <div id='myxyz'>
                    <div class='link'><a href='data/add-data.php'>Add Record</a></div>
                    <div class='link'><a href='data/update-data.php'>Update Record</a></div>
                    <div class='link'><a href='data/delete-data.php'>Delete Record</a></div>
                </div>
            </section><a href='update-admin.php' id='myyyy'>...Update Admin</a>
        </section>
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
                <!-- <p>developed by<img src="https://www.kirawebsteria.in/ihLed-Irarub-beWNgiseD/ixycZoXYnz-Main-Websteria.png" id="w-icon" alt="W"></p> -->
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