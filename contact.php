<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <link href ="style.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>İLETİŞİM</title>
</head>
<body class="page">
<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="index.html" class="navbar-brand">villasizin</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link active">About</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->

<!-- Contact Start -->
<div class="contact mt-125">
    <div class="container">
        <div class="section-header">
            <h2>İletişim Formu</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="contact-info">
                    <div class="contact-text">
                        <h3>Adres</h3>
                        <p>MERKEZ/KARABÜK</p>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="contact-text">
                        <h3>Telefon</h3>
                        <p>+90 555 5555</p>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="contact-text">
                        <h3>Email</h3>
                        <p>info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Adınız" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Konu" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="message" placeholder="Mesaj" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn" type="submit" id="sendMessageButton">GÖNDER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
</body>
</html>
