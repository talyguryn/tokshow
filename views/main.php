<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,user-scalable=no" />
        <link rel="stylesheet" href="public/build/bundle.css">
    </head>
    <body>

        <?php require 'components/header-drawer.php' ?>

        <div class="page">

            <?php require 'components/header.php' ?>

            <?php require 'components/idea.php' ?>
            <div id="heads">
                <?php require 'components/heads.php' ?>
            </div>
            <div id="place">
                <?php require 'components/where.php' ?>
            </div>
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
