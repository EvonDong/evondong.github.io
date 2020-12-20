<?php include 'sendemail.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <Title>Evon Dong Bing Bing</Title>

    <!--Font awesome CDN-->
    <Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!--Scroll reveal CDN-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <Link rel="stylesheet" type="text/css" href="/css/styles.css">
    <Link rel="stylesheet" type="text/css" href="/css/contact.css">
 
</head>

<body>
    <header>
        <div id="navbar-placeholder"></div>
    </header>
    
    <section id="contact-section">
        <div class="container">
            <div class="global-headline">
                <div class="animate-top">
                    <h2 class="sub-headline">
                        <span class="first-letter">G</span>et in Touch
                    </h2>
                </div>
            </div>

            <?php echo $alert; ?>
            <div class="contact-form">

                <!-- first grid section-->
                <div>
                    <i class="fa fa-map-marker"></i><span class="form-info">Addresss blahh</span><br>
                    <i class="fa fa-phone"></i><span class="form-info">number blahh</span><br>
                    <i class="fa fa-envelope"></i><span class="form-info">evon.dong3@gmail.com</span><br>
                </div>

                <!-- second grid section -->

                <div>
                    <form id="contact-form" method="post">
                        <input name="name" type="text" placeholder="Your name" required>
                        <input name="email" type="email" placeholder="Email" required>
                        <input name="subject" type="text" placeholder="Subject" required>
                        <textarea name="message" placeholder="Message" rows="5" required></textarea>
                        <button class="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(function() {
            $("#navbar-placeholder").load("navbar.html");
        })
    </script>
    <script type="text/javascript">
        if(window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>
</html>