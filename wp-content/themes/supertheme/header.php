 <!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Zoopark</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/styles.min.css" type="text/css" rel="stylesheet" media="screen,projection">
     <?php wp_head(); ?>
</head>

<body>
    <nav class="">
        <div class="search-bar nav-wrapper lighten-1 container">
            <form>
                <div class="input-field">
                    <input id="search" type="search" required>
                    <label for="search"><i class="material-icons">search</i></label><i class="material-icons">close</i></div>
            </form>
        </div>
    </nav>
    <nav class="white nav-princip" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><h1 class="brand">ZooPark/<em>adventure</em></h1></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Horaires <span>été 2016</span></a></li>
                <li><a href="mapzoo.html">Ou suis-je ? <span>plan du parc</span></a></li>
                <li><a href="#">Les animaux</a></li>
                <li><a href="contact.html">Contact <span>réservation</span></a></li>
                <li><a href="#" class="material-icons">search</a></li>
                <li></li>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <li><a href="#">Horaires</a></li>
                <li><a href="#">Ou suis-je ?</a></li>
                <li><a href="#">Les animaux</a></li>
                <li><a href="#">Infos pratiques</a></li>
            </ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a></div>
    </nav>