

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrazione</title>
    <!-- Fogli di stile -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">

    <link href="css/style.default.css" rel="stylesheet">
    <link href="css/style.custom.css" rel="stylesheet">
    <!-- Modernizr -->
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page-header">
    <div class="row">
        <div class="col-sm-3">
            <h1>logo</h1>
        </div>
        <div class="col-sm-6 bottom-menu">
            <a class="btn btn-primary" href="index.html">Home</a>
            <a class="btn btn-primary" href="chisiamo.html">Chi siamo</a>
            <a class="btn btn-primary" href="supporto.html">Supporto</a>
            <a class="btn btn-primary" href="faq.html">F.A.Q.</a>
        </div>
        <div class="col-sm-3">
            <a class="btn btn-primary-alt" href="accesso.php">Accedi</a>

        </div>
    </div>
</div>
<div class="container">
    <form action="1projectphp.php" method="post">
        <input type="hidden" name="step" value="1">
        <div class="row">
            <div class="col-sm-6">
                <h3>REGISTRATI</h3>
            </div>
            <div class="col-sm-6">

                <br>oppure
                <button type="button" class="btn btn-primary" style="margin-top: 1px">Accedi con Facebook</button>
                <button type="button" class="btn btn-danger">Accedi con Google</button>

            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label" for="email">Inserisci il tuo indirizzo e-mail</label>
                        <input type="email" name="email" id="email" class="form-control" />
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label" for="password">Inserisci la tua password</label>
                        <input type="password" name="password" id="password" class="form-control" />
                    </div>
                </div><!-- col-sm-6 -->
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label" for="ripeti-pass">Ripeti la tua password</label>
                        <input type="password" name="ripeti-pass" id="ripeti-pass" class="form-control" />
                    </div>
                </div><!-- col-sm-6 -->
            </div>

        </div><!-- panel-body -->
        <div class="checkbox">
            <label for="consenso">
                <input type="checkbox" id="consenso" name="consenso" value="1"> Consento il trattamento dei dati personali
            </label>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary pull-right">Registrati</button>
        </div>
    </form>
</div>

<div class="footer">
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
            <a href="#">Logo</a> |
            <a href="#"> Copyright</a> |
            <a href="#">Privacy e policy</a>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>