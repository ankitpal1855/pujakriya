<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pooja Kriya - Dashboard</title>

    <?php include 'common.php'; ?>
    <link rel="stylesheet" href="styles/index.css">

    <style>
        .items div img {
            width: 100%;
            height: 100%;
        }
    </style>
    <style>
        @media (max-width:1100px) {
            .sec1{
                height: 120vh;
                margin-top: 9vh;
                align-items: center;
                flex-direction: column-reverse;
            }

            .box{
                width: 100%;
                height: 300px;
            }
            .inbox{
                width: 90%;
            }
            .content{
                width: 100%;
                border-radius: 0%;
                height: 50%;
                margin: 10vh 0vh;
            }
        }
    </style>
    
    <script src='scripts/main.js'></script>

</head>

<body>
    <?php @include "header.php"; ?>
    <main>
        <section class="sec1">
            <div class="box">
                <div class="inbox">
                    <h1>यद्यदाचरति श्रेष्ठस्तत्तदेवेतरो जनः। स यत्प्रमाणं कुरुते लोकस्तदनुवर्तते॥</h1>

                    <p>जो भी श्रेष्ठ पुरुष करते हैं, वही दूसरे लोग भी करते हैं। श्रेष्ठ व्यक्तियों के कार्य दुनिया के लिए मानक स्थापित करते हैं।</p>
                    <p>जो व्यक्ति मानक स्थापित करता है, उसका अनुसरण करते हैं। दुनिया उनके द्वारा निर्धारित उदाहरण का अनुसरण करती है।</p>
                </div>
            </div>
            <div class="content">
                <h1>Customized Pooja Services Tailored to Your Spiritual Journey</h1>
            </div>
        </section>
        <section class="sec2 com">
            <div id="top-sec2" class="textty">
                <a href="gallery.php">Gallery</a>
            </div>
            <div id="bottom-sec2" class="item">
                <div class="text"></div>
                <div class="items">
                    <div>
                        <img src="https://t4.ftcdn.net/jpg/02/81/50/39/360_F_281503912_lIkQUHzzhYiLv2kNs1v1WByVpDjEt7eU.jpg" alt="">
                    </div>
                    <div>
                        <img src="https://media.istockphoto.com/id/1346254767/photo/terracotta-clay-kalash-decorated-with-coconut-mango-leaf-placed-on-marigold-flower-rangoli.jpg?s=612x612&w=0&k=20&c=s8v7rj02iRgINbvEMh9cRM_vtIAM7C0IEwk5gcS9hjw=" alt="">
                    </div>
                    <div>
                        <img src="https://www.partyone.in/suploads/2018/Sep/28/33874/1538117804office.JPG" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="sec3 com">
            <div id="top-sec3" class="textty">
                <a href="pandits.php">Pandits</a>
            </div>
            <div id="bottom-sec3" class="item">
                <div class="text"></div>
                <div class="items">
                    <div>
                        <img style="width:auto;" src="images/pandit1.jpg" alt="PANDIT">
                    </div>
                    <div>
                        <img style="width:auto;" src="images/pandit2.jpg" alt="PANDIT">
                    </div>
                    <div>
                        <img src="images/IMG-20240213-WA0008.jpg" alt="PANDIT">
                    </div>
                    <div>
                        <img style="width:auto;" src="images/exp.jpg" alt="PANDIT">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php @include "footer.php"; ?>
</body>

</html>