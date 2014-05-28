<!DOCTYPE html>
<html lang="es">
<head>

    <title><?php echo $title ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="contact" content="juan2ramos@gmail.com"/>
    <meta name="description"content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>
    <!-- Meta Facebook -->
    <meta property="og:url" content="http://circulart.com.co/">
    <meta property="og:title" content="circulart"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="images/logo.png"/>

    <link rel="shortcut icon" href="favicon.png">

    <!-- Estilos -->
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>


</head>
<body>

<div id="starts"></div>
<?php include $fileName; ?>

<footer>
    <figure id="user">
        <img src="images/profile.png" alt="Profile"/>
        <figcaption><div><span>x</span></div><span>Neil Armstrong</span></figcaption>
    </figure>
    <figure id="logo"><img src="images/logo.svg" alt="logo mi-martinez"/></figure>
    <nav>
        <ul>
        <li class="top-color branding" data-id="branding">
            <span class="hidden">Branding<br><b>digital</b></span>
            <i title="Branding" class="icon-branding"></i><span class="text">branding</span>
        </li>
        <li class="top-color web-apps" data-id="web-apps">
            <span class="hidden">Branding<br><b>digital</b></span>
            <i title="Web & Apps" class="icon-tool"></i><span class="text">web & apps</span>
        </li>
        <li class="top-color marketing" data-id="marketing">
            <span class="hidden">Branding<br><b>digital</b></span>
            <i title="Marketing" class="icon-marketing"></i><span class="text">marketing</span>
        </li>
        <li class="top-color produccion" data-id="produccion">
            <span class="hidden">Branding<br><b>digital</b></span>
            <i title="Producción" class="icon-camara"></i><span class="text">producción</span>
        </li>
        <li class="top-color estrategia" data-id="estrategia">
            <span class="hidden">Branding <br><b>digital</b></span>
            <i title="Estrategia" class="icon-clock"></i><span class="text">estrategia</span>
        </li>
        <li class="top-color impresion" data-id="impresion">
            <span class="hidden">Branding<br><b>digital</b></span>
            <i title="Impresión" class="icon-print"></i><span class="text">impresión</span>
        </li>

        </ul>
    </nav>
</footer>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/script.js"></script>
</body>
</html>