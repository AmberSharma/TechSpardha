<?php
/**
 * Creation Log File Name - homePage.php 
 * Description - TechSpardha homepage file
 * @Version - 1.0 
 * Created by - TechSpardha
 * Created on - September 30, 2013 
 * *************************************************
 */
ini_set("display_errors", "1");
?>
<html>
    <head>
        <title>TechSpardha</title>
        <link href="<?php echo SITE_URL; ?>/assets/css/templatemo_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />

        <script src="<?php echo SITE_URL; ?>/assets/javascript/jquery-1.2.6.js" type="text/javascript"></script>
        <script src="<?php echo SITE_URL; ?>/assets/javascript/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
        <script src="<?php echo SITE_URL; ?>/assets/javascript/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo SITE_URL; ?>/assets/javascript/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo SITE_URL; ?>/assets/javascript/coda-slider.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo SITE_URL; ?>/assets/javascript/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

    </head>
    <body>
        <div id="slider">
            <?php require_once SITE_PATH . '/View/mainMenu.php'; ?>
            <div id="templatemo_main">
                <?php require_once SITE_PATH . '/View/socialNetworkLinks.php'; ?>
                <div id="content">

                    <!-- scroll -->


                    <div class="scroll">
                        <div class="scrollContainer">

                            <?php require_once SITE_PATH . '/View/mainMenu.php'; ?>
                            <?php require_once SITE_PATH . '/View/homeLinkContent.php'; ?> 
                            <!-- end of home -->
                            <?php require_once SITE_PATH . '/View/aboutUsLinkContent.php'; ?>
                            <!-- end of aboutus -->
                            <?php require_once SITE_PATH . '/View/servicesLinkContent.php'; ?>
                            <!-- end of services -->
                            <?php require_once SITE_PATH . '/View/galleryLinkContent.php'; ?>
                            <!-- end of gallery -->
                            <?php require_once SITE_PATH . '/View/contactUsLinkContent.php'; ?>
                            <!-- end of contactus -->


                        </div>
                    </div>

                    <!-- end of scroll -->

                </div> <!-- end of content -->

                <div id="templatemo_footer">

                    Copyright © 2048 <a href="#">TechSpardha</a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>

                </div> <!-- end of templatemo_footer -->

            </div> <!-- end of main -->
        </div>
    </body>
</html>
