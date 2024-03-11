<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pooja Kriya - Contact Us</title>

    <?php include 'common.php'; ?>
    <link rel="stylesheet" href="styles/contact.css">

    <script src='scripts/main.js'></script>

</head>

<body>
    <?php @include "header.php"; ?>
    <main>
        <div class="background sections">
            <div class="clouds"></div>
            <div class="content-wrapper">
                <h1 class="title">Let's Talk</h1>
                <h2 class="subtitle">Contact Us</h2>
            </div>
            <div class="sun"></div>
            <div class="swan"></div>
        </div>
        <p>
            Thank you for considering Puja Kriya for your spiritual needs. We are
            dedicated to providing exceptional services and support to our valued
            customers. Please find below a comprehensive list of ways to get in
            touch with us:
        </p>
        <hr />
        <div class="sections">
            <h2 class="subtitle">Contact Information</h2>
            <ul>
                <li>Phone: +91 7036735448</li>
                <li>Email: pujakriya.contact@gmail.com</li>
            </ul>
        </div>
        <hr>
        <div class="sections">
            <h2 class="subtitle">Office Address</h2>

            <p>Burari, Delhi-110086, Delhi
            </p>
        </div>
        <hr>
        <div class="sections">
            <h2 class="subtitle">Business Hours</h2>
            <p>Monday - Friday: 9:00 AM - 6:00 PM
                Saturday: 10:00 AM - 4:00 PM
                Sunday: Closed</p>
        </div>
        <hr>
        <div class="sections">
            <h2 class="subtitle">Social Media</h2>
            <p>Connect with us on social media for updates, offers, and more:</p>
            <p>- Facebook | (https://www.facebook.com/pujakriya) </p>
            <p>
                - Twitter | (https://twitter.com/pujakriya) </p>
            <p>
                - Instagram | (https://www.instagram.com/pujakriya)</p>
        </div>
        <hr>
        <div class="sections">
            <h2 class="subtitle">Online Form</h2>
            <p>If you prefer, you can also fill out the form below, and we'll get back to you as soon as possible.</p>
        </div>
        </div>

        <div class="container">
            <form>
                <h2>Enter your Correct Details</h2>

                <div class="field">
                    <p>Name</p>
                    <input type="text" id="name" name="name" placeholder="Enter your name" /><br /><br />
                </div>

                <div class="field">
                    <p>Phone</p>
                    <input type="text" id="phone" name="phone" placeholder="Enter your phone number" /><br />
                    <span id="phone-error" style="color: red"></span><br />
                </div>

                <div class="field">
                    <p>Email-ID</p>
                    <input type="text" id="email" name="email" placeholder="Enter your email" /><br /><br />
                </div>

                <input id="submit" type="submit" value="Submit" onclick="sendEmail()" />
                <p class="note">
                    Note: After Clicking 'Submit' your Gmail will open with composed
                    email to our official mail Just Click send from top-right corner
                </p>
            </form>
        </div>
        <hr>
        <div>
            <h2 class="subtitle">FAQs (Frequently Asked Questions)</h2>
            <h3>Got questions? Check out our FAQs for quick answers to common queries.</h3>

            <p>- How do I book a pandit for a puja?</p>
            <p>- What rituals do you offer?</p>
            <p>- Do you provide services for weddings?
            </p>
            <h4>Just make a short Call!</h4>
            <hr>
            <p>Thank you for choosing Puja Kriya. We are honored to be a part of your spiritual journey and look forward
                to serving you with our divine services.</p>
            <hr>
        </div>
    </main>
    <?php @include "footer.php"; ?>

    <!-- Js is linked here -->
    <script src="scripts/main.js"></script>
    <script>
        function sendEmail() {
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;

            const body = `Name: ${name}%0D%0APhone Number: ${phone}%0D%0AEmail: ${email}`;

            const mailtoLink = `mailto:pujakriya.contact@gmail.com?subject=New Contact&body=${body}`;
            window.location.href = mailtoLink;
        }
    </script>
    </script>
</body>

</html>