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
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Jak robić listy prezentow?</h2>
                        <p>Najpierw dodaj nazwę swojego prezentu. Możesz też go opisać, jezeli chcesz. Następnie dodaj zdjęcie swojego prezentu poprzez wklejenie jego adresu URL lub dodanie go ze swojego komputera. Dodaj tak parę prezentow, a następnie kliknij "Zakończ". </p>
                    </div>
                    <div class="col-md-6">
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nazwa prezentu" id="formtitle">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Teraz go opisz" class="form-control" id="formdesc"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="URL obrazka" id="formimg">
                            </div>
                            <a href="javascript:void(0)" class="btn btn-primary" id="add">Dodaj prezent</a>
                            <a id="end" href="javascript:void(0);">Zakoncz</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row" id="giftlist">
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
