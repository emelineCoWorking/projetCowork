<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CoWor</title>
    <link href="<?= base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('css/materialize.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
</head>
<body>
<?php if(!isset($_SESSION['id'])){
    $_SESSION['id']=NULL;
}
?>
<!-- Fixed navbar -->
<nav class="nav-menu ">
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><i class="fa fa-users" aria-hidden="true"></i></a>
        <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="fa fa-bars"></i></a>
        <ul class="right hide-on-med-and-down liens-nav">
            <li><a href="aide.html" class="list-elm">Aide</a></li>
            <?php if ($_SESSION['id']!== NULL ){ ?>
                <li><a href="logout.html" class="list-elm">deconnexion</a></li>
            <?php }else { ?>
                <li><a href="<?= site_url('login'); ?>" class="list-elm">Connexion</a></li>
                <li><a href="inscription.html" class="list-elm">Inscription</a></li>
            <?php } ; ?>
            <li><a href="hote.html" class="list-elm">Devenir hôte</a></li>
        </ul>
        <ul class="side-nav liens-nav" id="mobile-menu">
            <li><a href="aide.html" class="list-elm">Aide</a></li>
            <?php if ($_SESSION['id']!== NULL ){ ?>
                <li><a href="logout.html" class="list-elm">deconnexion</a></li>
            <?php }else { ?>
                <li><a href="<?= site_url('login'); ?>" class="list-elm">Connexion</a></li>
                <li><a href="inscription.html" class="list-elm">Inscription</a></li>
            <?php } ; ?>
            <li><a href="hote.html" class="list-elm">Devenir hôte</a></li>
        </ul>

    </div>
</nav>