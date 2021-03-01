<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Piazzolla:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" />
    <title> Cabot Cruises <?php wp_title(); ?> </title>
</head>

<body>

    <div id="headerWrapper">
        <header>

            <nav class="mainMenu">
                <div class="aContainer">
                    <div>
                        <ion-icon id="menuIcon" name="menu"></ion-icon>
                    </div>
                    <div id="searchDiv">
						<form method="get" action="/">
						 <input id="searchBox" name="s" type="search" placeholder="Search...">
                        <button type="submit">
                            <ion-icon id="searchIcon" name="search"></ion-icon>
                        </button>
						</form>
                       
                    </div>
                    <div class="menuLinks default">
                       <?php wp_nav_menu(array('menu' => 'primaryNav')) ?>
                    </div>

                </div>

            </nav>

            <div class="logo">
                <div class="logoBox">
                    <a href="http://thecabotcruises.timetoady.com/">
                    <img srcset="<?php echo get_template_directory_uri(); ?>/assets/images/cabotCruises1.png,
                        <?php echo get_template_directory_uri(); ?>/assets/images/cabotCruises@2x.png 2x,
                        <?php echo get_template_directory_uri(); ?>/assets/images/cabotCruises@3x.png 3x" src="<?php echo get_template_directory_uri(); ?>/images/cabotCruises1.png"
                        alt="Cabot Cruises Logo">
                    </a>

                </div>


                <div id="numberDiv">
<!--                    <a href="tel:1-800-555-1234">1-800-555-1234</a>-->
					<p class="slogan">Where the Ocean meets your Wallet</p>
                </div>

            </div>

        </header>

    </div>

    <main>
		
		<div id="container">