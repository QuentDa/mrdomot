<?php require_once 'tools/_db.php';
if(isset($_GET['logout']) && isset($_SESSION['user'])){
    session_destroy();
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
            <title>MR.DOMOT - Accessoires, équipements de domotique</title>
</head>
<body>
<?php require_once 'partials/nav.php'?>
<h1 id="autotext">
    <a class="typewrite navlink" data-period="2000" data-type='[ "Entrez dans un univers de Domotique.", "Unissez High-Tech, et magie.", "Un monde de design, épuré et discret.", "Osez Mr. Domot." ]'>
        <span class="wrap"></span>
    </a>
</h1>
<div class="container-fluid">
    <div class="row">
        <div class="modals w-100 d-flex justify-content-center">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-secondary modallauncher" data-toggle="modal" data-target=".bd-example-modal-lg1" style="color: white">Installer</button>&nbsp;
        <button type="button" class="btn btn-outline-secondary modallauncher" data-toggle="modal" data-target=".bd-example-modal-lg2" style="color: white">Configurer</button>&nbsp;
        <button type="button" class="btn btn-outline-secondary modallauncher" data-toggle="modal" data-target=".bd-example-modal-lg3" style="color: white">Contrôler</button>&nbsp;
        <button type="button" class="btn btn-outline-secondary modallauncher" data-toggle="modal" data-target=".bd-example-modal-lg4" style="color: white">Recevez</button>&nbsp;
        </div>
    </div>
</div>


<footer class="d-flex flex-row justify-content-center align-items-end">
    <div>
        Mr. Domot © 2018
        <i class="fa fa-circle dot" aria-hidden="true"></i>
        <a class="navlink" href="">Mentions légales </a>
        <i class="fa fa-circle dot" aria-hidden="true"></i>
        <a class="navlink" href="">Contact </a>
    </div>
</footer>

<video autoplay loop id="bgvid">
    <source src="images/Luxury_Best_Modern_House_Plans_and_Designs_Worldwide.mp4" type="video/mp4">
</video>






<!-- Modal Button 1-->
<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="images/install.jpg" alt="" width="100%">
            </div>
        </div>
    </div>
</div>
<!-- Modal Button 2-->
<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="images/configuration.jpg" alt="" width="100%">
            </div>
        </div>
    </div>
</div>
<!-- Modal Button 1-->
<div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="images/control.jpg" alt="" width="100%">
            </div>
        </div>
    </div>
</div>
<!-- Modal Button 1-->
<div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="images/connectedhouse.jpg" alt="" width="100%" height="400px">
            </div>
        </div>
    </div>
</div>


</body>
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
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
</html>
