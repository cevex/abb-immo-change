<?
header('Content-Type: text/html; charset=utf-8');
$host = $_SERVER['HTTP_HOST'];
setlocale(LC_TIME, "fr_FR.utf8");
date_default_timezone_set('Europe/Paris');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Bienvenue sur <? print $host; ?>! Hostinger - Hébergement gratuit avec PHP et MySQL.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="http://www.main-hosting.com/hostinger/welcome/css/site.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
    <div id="content">
        <div class="header">
            <a id="logo" href="https://www.hostinger.fr/"><img src="https://www.hostinger.fr/static/default.hostinger.co.uk/images/logo.png" alt="Hébergement de sites web" /></a>
        </div>
        <div class="content">
            <h1>Votre compte a été créé!</h1>
            <p>Site Web <b><? print $host; ?></b> a été installé avec succès sur le serveur! S'il vous plaît supprimer le fichier <b>default.php</b> du répertoire <b>public_html</b> puis téléchargez votre site Web en utilisant FTP ou un gestionnaire de fichiers.</p>
            <div class="clear"></div>
        </div>
        <div class="footer"></div>
        <div class="clear"></div>
    </div>
    <div id="footer">
        <div class="links">
            <a href="http://www.hostinger.fr/hebergement-gratuit" target="_blank">Hébergement Gratuit</a>
            <span class="pipe">|</span>
            <a href="http://www.hostinger.fr/hebergement-web" target="_blank">Hébergement Web</a>
            <span class="pipe">|</span>
            <a href="http://www.hostinger.fr/forum" target="_blank">Support Général </a>
            <span class="pipe">|</span>
            <a href="http://cpanel.hostinger.fr/" target="_blank">Espace Client</a>
        </div>
        <div class="copyright">Hostinger France &copy; <? print date('Y'); ?>. Tous droits réservés.</div>
        <div class="social-icons">
            <a href="http://www.facebook.com/Hostinger.fr"><img src="http://www.main-hosting.com/hostinger/welcome/images/fb.gif" /></a>
            <a href="https://twitter.com/HostingerCOM"><img src="http://www.main-hosting.com/hostinger/welcome/images/twitter.gif" /></a>
        </div>
    </div>
</div>
</body>
</html>