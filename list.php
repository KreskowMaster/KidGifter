<?php
error_reporting(-1);
ini_set('display_errors', 'On');
session_start();

include 'Model.class.php';
include 'Controler.class.php';
include 'config.php';

$list_id = $_GET['id'];
$model = new Model(DBHOST, DBPORT, DBUSERNAME, DBPASSWORD, DBNAME);
$list = $model->getList($list_id);
//var_dump($list);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KidGifter</title>
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>



        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="img/logo-280x.png" id="logo">
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="col-md-12">
                <input type="url" value="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                <a href="">Edytuj</a>            
                <input type="text"placeholder="Hasło do edycji" value="<?php echo $_GET['password']; ?>"> 
            </div>
            <div class="col-md-12">
                <div class="fb-share-button" data-href="" data-layout="button"></div>
                <a href="https://twitter.com/share" class="twitter-share-button" data-text="Moja lista prezentów" data-lang="pl" data-count="none" data-hashtags="kidgifter">Tweetnij</a>
                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + '://platform.twitter.com/widgets.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'twitter-wjs');</script>
            </div>

            <div class="row" id="giftlist">
                <?php
                foreach ($list as $gift) {
                    ?>
                    <div class="col-md-4">
                        <div class="gift">
                            <div class="image" style="background-image: url(<?php echo $gift['img_url'] ?>);"></div>
                            <div class="name"><?php echo $gift['name'] ?></div>
                            <div class="desc"><?php echo $gift['desc'] ?></div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <hr>
            <footer>
                <p>&copy; Company 2014</p>
            </footer>
            <div class="col-md-4 template">
                <div class="gift">
                    <div class="image"></div>
                    <div class="name"></div>
                    <div class="desc"></div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="addgifts.js" type="text/javascript"></script>
    </body>
</html>
