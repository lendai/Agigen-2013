<?php
require 'events.php';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Agigen 2013</title>
        <meta name="description" content="Agigen 2013 - A year in review">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="http://agigen.se/wp-content/themes/agigen_v3/images/favicon.ico"/>

        <meta property="og:title" content="Agigen 2013 - A year in review">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Agigen 2013">
        <meta property="og:description" content="A year in review. A summary of all the glory we achieved during 2013.">
        <meta property="og:url"   content="http://2013.agigen.se">
        <meta property="og:image" content="http://2013.agigen.se/img/og.png">
        <meta property="fb:admins" content="562883652">
        
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <header class="agigen-section main-header vc-container">
            <div class="vc">
                <h1 class="agigen-section__header">Agigen 2013</h1>
                <h2 class="agigen-section__subheader">A year in review</h2>
            </div>
        </header>
        
        <?php
        foreach ($events as $event):
        ?>
        <section class="agigen-section"
        <?php if (isset($event->img)): ?> style="background-image: url(/img/events/<?php echo $event->img ?>)" <?php endif ?> 
        data-top-top="filter: grayscale(0);"
        data-top-bottom="filter: grayscale(1);"
        >
            <div class="agigen-section__container vc-container">
                <div class="vc">
                    <h2 class="agigen-section__header"><?php echo $event->title ?></h2>
                    <?php if (isset($event->caption)): ?>
                        <h3 class="agigen-section__subheader"><?php echo $event->caption ?></h3>
                    <?php endif ?>
                    
                    <div class="agigen-section__related">
                        
                        <?php if (isset($event->link)): ?>
                            <a class="agigen-btn" href="<?php echo $event->link->url ?>"><?php echo $event->link->title ?></a>
                        <?php endif ?>
                        <?php if (isset($event->video)): ?>
                            <a class="agigen-btn" href="<?php echo $event->video ?>">Watch the video</a>
                        <?php endif ?>
                        
                        
                        
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <?php
        endforeach;
        ?>
        <footer class="agigen-section">
            <p>
            &bull; 2014<br>
            &bull; ?????<br>
            &bull; PROFIT
            </p>
            
            <p>
                Want to join the <a href="http://agigen.se">best company in the world</a>? Send an email to <a href="mailto:daniel@agigen.se">daniel@agigen.se</a>
            </p>

            <p>
                And at last;<br>
                from all of us, to all of you. A merry merry christmas!
            </p>
            
        </footer>
        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/skrollr.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
