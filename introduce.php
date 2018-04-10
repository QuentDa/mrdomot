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
    <link rel="stylesheet" href="css/introduce.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <title>MR.DOMOT - Introduction</title>
</head>
<body>

<?php require_once 'partials/nav.php'?>
<div class="container-fluid">
    <div class="row">
        <div id="introducebg">
            <div class="d-flex align-items-center h-100">
                <h1>Contrôler votre maison, avec un seul doigt. <br>
                    <span class="font-weight-light">Notre priorité, votre sérénité.</span>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row d-flex justify-content-center" id="dreamrow">
        <div id="domodream" class="col-md-4 d-flex flex-column justify-content-center text-center animated fadeInLeft">
            <h3 class="font-weight-light d-flex justify-content-center align-items-center">La domotique, un rêve éxaucé</h3>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <div class="icons d-flex flex-column justify-content-center">
                    <img src="images/wireless.svg" alt="" width="70px">
                    <p class="small"> Sans fil</p>
                </div>
                <div class="icons d-flex flex-column justify-content-center">
                    <img src="images/modularity.svg" alt="" width="70px">
                    <p class="small"> Modularité</p>
                </div>
                <div class="icons d-flex flex-column justify-content-center">
                    <img src="images/ecosystem.svg" alt="" width="70Px">
                    <p class="small"> Éco-Système</p>
                </div>
                <div class="icons d-flex flex-column justify-content-center">
                    <img src="images/design.svg" alt="" width="70px">
                    <p class="small"> Design Épuré</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="interactivehouse" class="container-fluid">
    <div id="rowbackground" class="row">
        <div class="d-flex justify-content-center w-100">
            <h1 id="interactivetitle">Votre maison intéractive par Mr Domot</h1>
        </div>
        <a id="ahide" href=""><div class="bigbutton d-flex justify-content-center align-items-center"><i style="color: white; font-size: 40px" class="fas fa-eye-slash"></i></div></a>
        <a id="ashow" href=""><div class="bigbutton d-flex justify-content-center align-items-center"><i style="color: white; font-size: 40px" class="fas fa-eye"></i></div></a>

        <div id="backgroundbubbles">
            <img id="bubblesopen" src="images/interactivehousetransparance.png" usemap="#image-map" alt="" height="100%" width="100%">
            <p class="bubblestext" id="cameratext">Caméra de Surveillance et capteur de mouvement</p>
            <p class="bubblestext" id="lighttext">Contrôler la luminosité</p>
            <p class="bubblestext" id="doortext">Vérouillez vos portes/fenêtres</p>
            <p class="bubblestext" id="temperaturetext">Ajustez la température à votre guise</p>
            <p class="bubblestext" id="wirelesstext">Vous avez le contrôle sans-fil <br>ou que vous soyez</p>
            <p class="bubblestext" id="musictext">Écoutez vos meilleures playlist, sans bouger</p>
            <p class="bubblestext" id="windowstext">Gérez la fermeture de vos stores et fenêtres</p>
            <p class="bubblestext" id="watertext">Envie d'un thé ? Faîtes préchauffez votre eau !</p>
            <p class="bubblestext" id="shieldtext">Tout ceci, en toute sécurité</p>
            <map name="image-map">
                <area target="" alt="camera" id="cameratoggle" coords="35,191,56" shape="circle">
                <area target="" alt="light" id="lighttoggle" coords="327,409,68" shape="circle">
                <area target="" alt="door" id="doortoggle" coords="571,476,62" shape="circle">
                <area target="" alt="temperature" id="temperaturetoggle" coords="720,169,60" shape="circle">
                <area target="" alt="wireless" id="wirelesstoggle"  coords="843,329,67" shape="circle">
                <area target="" alt="music" id="musictoggle" coords="1017,493,60" shape="circle">
                <area target="" alt="windows" id="windowstoggle" coords="1199,376,54" shape="circle">
                <area target="" alt="water" id="watertoggle" coords="1337,505,51" shape="circle">
                <area target="" alt="shield" id="shieldtoggle" coords="1406,153,61" shape="circle">
            </map>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div id="rowusephone" class="row d-flex align-items-center ">
        <h1>Ayez le contrôle, où que vous soyez,<br> quand vous le souhaitez. Économisez ainsi votre énergie. <br><p>Vous êtes propriétaire, locataire, personne âgée ou à mobilité réduite? Entrez dans le monde de la maison intelligente. Laissez-nous vous faire découvrir les avantages de la domotique. Automatisez vos appareils et composantes électriques pour une meilleure gestion de l’énergie et améliorez votre quotidien de façon simple et efficace. Avoir le contrôle sur tous les appareils d’une maison (éclairage, chauffage, appareils électroniques, serrure de porte, caméra, etc.), tout cela du bout de vos doigts par l’intermédiaire d’un ordinateur, d’un téléphone intelligent ou d’une interface, (tablette, système d’alarme).</p>
            <hr><p> En gérant les volets selon la saison, ainsi que le chauffage, le système domotique vous permet d’économiser de l’énergie,
            <br> et donc de l’argent, même si au départ on ne recherchait que le confort en plus. La consommation d’énergie peut être suivie très finement,
            <br> qu’il s’agisse de votre consommation d’électricité, d’eau, ou même de gaz.</p></h1>
    </div>
</div>
<div class="container-fluid">
    <div id="rowcrypted" class="row d-flex align-items-center ">
        <h1>Sécurité des données en priorité<br>
            <p>L'accès à votre domicile et à vos données sont protégés au plus haut niveau <br> - via les systèmes WAF et Anti-DDoS, La communication cryptée à l'aide du protocole TLS et les mots de passe à l'aide de bcrypt.</p></h1>

    </div>
</div>

<div class="container-fluid">
    <div id="rowgetstarted" class="row d-flex flex-column align-items-center">
        <h1 class="animated fadeInDown">Alors, on commence ?</h1>
        <a href="product_list.php"><button type="button" class="btn btn-outline-secondary modallauncher" data-toggle="modal" style="color: white">Vers la boutique</button></a>
    </div>
</div>




<script>

    $('#ashow').click(function(e){
        e.preventDefault()
        $(this).hide()
        $('#ahide').show()
        $('#backgroundbubbles').hide()
        $('#interactivetitle').show()
    })
    $('#ahide').click(function(e){
        e.preventDefault()
        $(this).hide()
        $('#ashow').show()
        $('.bubblestext').hide()
        $('#backgroundbubbles').fadeIn()
        $('#interactivetitle').hide()
    })

    $('#cameratoggle').click(function(e){
        e.preventDefault()
        if($('#cameratoggle').hasClass('in') == true){
            $('#cameratext').fadeOut()
            $('#cameratoggle').removeClass('in')
        } else{
            $('#cameratext').fadeIn()
            $('#cameratoggle').addClass('in')
        }
    })
    $('#lighttoggle').click(function(e){
        e.preventDefault()
        if($('#lighttoggle').hasClass('in') == true){
            $('#lighttext').fadeOut()
            $('#lighttoggle').removeClass('in')
        } else{
            $('#lighttext').fadeIn()
            $('#lighttoggle').addClass('in')
        }
    })
    $('#doortoggle').click(function(e){
        e.preventDefault()
        if($('#doortoggle').hasClass('in') == true){
            $('#doortext').fadeOut()
            $('#doortoggle').removeClass('in')
        } else{
            $('#doortext').fadeIn()
            $('#doortoggle').addClass('in')
        }
    })
    $('#temperaturetoggle').click(function(e){
        e.preventDefault()
        if($('#temperaturetoggle').hasClass('in') == true){
            $('#temperaturetext').fadeOut()
            $('#temperaturetoggle').removeClass('in')
        } else{
            $('#temperaturetext').fadeIn()
            $('#temperaturetoggle').addClass('in')
        }
    })
    $('#wirelesstoggle').click(function(e){
        e.preventDefault()
        if($('#wirelesstoggle').hasClass('in') == true){
            $('#wirelesstext').fadeOut()
            $('#wirelesstoggle').removeClass('in')
        } else{
            $('#wirelesstext').fadeIn()
            $('#wirelesstoggle').addClass('in')
        }
    })
    $('#musictoggle').click(function(e){
        e.preventDefault()
        if($('#musictoggle').hasClass('in') == true){
            $('#musictext').fadeOut()
            $('#musictoggle').removeClass('in')
        } else{
            $('#musictext').fadeIn()
            $('#musictoggle').addClass('in')
        }
    })
    $('#windowstoggle').click(function(e){
        e.preventDefault()
        if($('#windowstoggle').hasClass('in') == true){
            $('#windowstext').fadeOut()
            $('#windowstoggle').removeClass('in')
        } else{
            $('#windowstext').fadeIn()
            $('#windowstoggle').addClass('in')
        }
    })
    $('#watertoggle').click(function(e){
        e.preventDefault()
        if($('#watertoggle').hasClass('in') == true){
            $('#watertext').fadeOut()
            $('#watertoggle').removeClass('in')
        } else{
            $('#watertext').fadeIn()
            $('#watertoggle').addClass('in')
        }
    })
    $('#shieldtoggle').click(function(e){
        e.preventDefault()
        if($('#shieldtoggle').hasClass('in') == true){
            $('#shieldtext').fadeOut()
            $('#shieldtoggle').removeClass('in')
        } else{
            $('#shieldtext').fadeIn()
            $('#shieldtoggle').addClass('in')
        }
    })


</script>



    <?php require_once 'partials/footer.php'?>
</body>
</html>
