<?php include "variables/variables.php";?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hw13</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link href="bootstrap-sass-3.3.6/assets/stylesheets/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="flexslider/flexslider.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>

<div class="wrapper">


    <!-- header -->
    <header>
        <div class="row">
            <div class="col-xs-12">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- HTML for SEARCH BAR -->
                            <div id="tfheader">
                                <form id="tfnewsearch" method="get" action="http://www.google.com">
                                    <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="Поиск" class="tfbutton">
                                </form>
                                <div class="tfclear"></div>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="collapse">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">Новости</a>
                                </li>
                                <?php include('templates/nav-menu.php'); ?>
                                <li class="nav-item"><a href="#" class="nav-link">Приглашаю</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Акции</a></li>
                                <li class="nav-item"><a href="text.html" class="nav-link">Контакты</a></li>
                            </ul>
                            <a href="#" class="shop"><img src="images/shop-icon.png" alt="Loading..."></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>