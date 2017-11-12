<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,user-scalable=no" />
        <link rel="stylesheet" href="public/build/bundle.css">
    </head>
    <body>

        <div class="page">

            <?php require 'components/header.php' ?>

            <?php require 'components/idea.php' ?>
            <div id="heads" class='space'></div>
            <div id="place" class='space'>Где и когда</div>
            <?php require 'components/registration.php' ?>
            <?php require 'components/organizers.php' ?>

            <div class="footer-background">
            <?php require 'components/partners.php' ?>
            <?php require 'components/footer.php' ?>
            </div>

        </div>

        <script src="public/build/bundle.js" async></script>
    </body>
</html>
