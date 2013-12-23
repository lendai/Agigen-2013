<?php
include 'events.php';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.<?php echo filemtime('css/main.css') ?>.css">
        <link rel="dns-prefetch" href="//ajax.googleapis.com">

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

        <script src="js/vendor/modernizr-custom.min.js"></script>
    </head>
    <body>
        <div id="skrollr-body">
            <header class="agigen-section agigen-section--main-header">
                <div class="agigen-section__container vc-container">
                    <div class="vc">
                        <h1 class="agigen-section__header">Agigen 2013</h1>
                        <h2 class="agigen-section__subheader">A year in review</h2>
                    </div>
                </div>
            </header>
            <?php foreach ($events as $event): ?>

                <section class="agigen-section
                                <?php if (isset($event->img)): ?>agigen-section--background-image<?php endif ?>
                                <?php if (isset($event->color)): ?>agigen-section--color<?php endif ?>"
                         style="<?php if (isset($event->color)): ?>color: <?php echo $event->color ?>; <?php endif ?>
                                <?php if (isset($event->bgcolor)): ?>background-color: <?php echo $event->bgcolor ?>; <?php endif ?>"
                >
                    <?php if (isset($event->img)): ?>
                        <div class="agigen-section__background" style="background-image: url(/img/events/<?php echo $event->img ?>);"></div>
                        <div class="agigen-section__background agigen-section__background--past" style="background-image: url(/img/events/<?php echo $event->img ?>);"
                             data-center-center="opacity: 0;"
                             data-top-center="opacity: 1;"></div>
                    <?php endif ?>
                    <?php if (isset($event->bgvideo)): ?>
                        <video class="agigen-section__bgvideo" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
                            <source src="video/<?php echo $event->bgvideo ?>.mp4" type="video/mp4">
                            <source src="video/<?php echo $event->bgvideo ?>.webm" type="video/webm">
                        </video>
                    <?php endif ?>

                    <div class="agigen-section__container vc-container">
                        <div class="vc">
                            <h2 class="agigen-section__header"><?php echo $event->title ?></h2>
                            <?php if (isset($event->caption)): ?>
                                <h3 class="agigen-section__subheader"><?php echo $event->caption ?></h3>
                            <?php endif ?>

                            <div class="agigen-section__related">
                                <?php if (isset($event->link)): ?>
                                    <?php if (!is_array($event->link)) { $event->link = array($event->link); } ?>
                                    <?php foreach ($event->link as $l): ?>
                                        <a class="agigen-btn" href="<?php echo $l->url ?>"
                                            target="_blank"
                                            style="
                                        <?php if (isset($l->bgcolor)) echo 'background-color: ' . $l->bgcolor . '; ';  ?>
                                        <?php if (isset($l->color)) echo 'color: ' . $l->color . '; ';  ?>
                                            "><?php echo $l->title ?></a>
                                    <?php endforeach ?>
                                <?php endif ?>
                                <?php if (isset($event->video)): ?>
                                    <a class="agigen-btn" href="<?php echo $event->video ?>">Watch the video</a>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </section>

            <?php endforeach; ?>

            <section class="agigen-section agigen-section--footer">
                <footer class="agigen-section__container vc-container">
                    <div class="vc footer-content">
                        <p>
                            Want to join the <a href="http://agigen.se">best company in the world</a>?<br>
                            <a class="agigen-btn" href="mailto:jobs@agigen.se">
                                <i class="fa fa-envelope"></i> jobs@agigen.se
                            </a>
                        </p>

                        <p>
                            Or get world-class developers on your next project?<br>
                            <a href="mailto:business@agigen.se" class="agigen-btn">
                                <i class="fa fa-thumbs-up"></i> business@agigen.se
                            </a>
                        </p>

                        <p>
                            And at last; from all of us, to all of you. <br>
                            <strong class="avantgarde"><i class="fa fa-star-o"></i> A merry merry christmas, and a happy new year! <i class="fa fa-heart-o"></i></strong>
                        </p>

                        <div class="fb-like" 
                             data-href="http://2013.agigen.se/"
                             data-layout="box_count"
                             data-colorscheme="light"
                             data-action="like"
                             data-show-faces="false"
                             data-share="false"></div>

                        <?php /*

                        <p class="agigen-sharing">
                            <a href="" class="agigen-sharing__item agigen-sharing__item--facebook">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="" class="agigen-sharing__item agigen-sharing__item--googleplus">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a href="" class="agigen-sharing__item agigen-sharing__item--twitter">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                        </p>

                        */ ?>
                    </div>
                </footer>
            </section>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <?php if (true): /* inline small js? */ ?>
            <script type="text/javascript">
                <?php echo file_get_contents('js/main.js') ?>
            </script>
        <?php else: ?>
            <script src="js/main.<?php echo filemtime('js/main.js') ?>.js"></script>
        <?php endif ?>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create', 'UA-7546376-6', 'agigen.se');
            ga('send','pageview');
        </script>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=189436057913205";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>
