<?php require_once 'tools/_db.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <title>MR.DOMOT - Contact</title>
</head>
<body>
<?php require_once 'partials/nav.php'?>
    <main class="container-fluid">
        <div id="contactrow" class="row">
            <div class="d-flex justify-content-center mt-5">
                <h1 id="autotext">
                    <a class="typewrite navlink" data-period="2000" data-type='[ "Une question, une envie ?", "Écrivez nous." ]'>
                        <span class="wrap"></span>
                    </a>
                </h1>
            </div>
            <div class="container-fluid">
                <form class="row" action="contact.php" method="post">
                        <div class="form-group col-sm-3 offset-sm-1">
                            <label for="firstname">Prénom <b class="text-danger">*</b></label>
                            <input class="form-control" type="text" placeholder="Prénom" name="firstname" id="firstname" />
                            <label for="firstname">Nom <b class="text-danger">*</b></label>
                            <input class="form-control" type="text" placeholder="Nom" name="lastname" id="lastname" />
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="firstname">Adresse E-mail <b class="text-danger">*</b></label>
                            <input class="form-control" type="email" placeholder="Adresse e-mail" name="email" id="email" />
                            <label for="bio">Votre message</label>
                            <textarea id="msg" class="form-control" name="msg" id="msg" placeholder="Écrivez nous votre demande"></textarea>
                            <br>
                            <input class="w-25 align-items-end" type="submit" value="Envoyer">
                        </div>

                </form>
            </div>
        </div>


    </main>











<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
</body>
</html>