
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accesso</title>
    <!-- Fogli di stile -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.default.css" rel="stylesheet">
    <link href="css/style.custom.css" rel="stylesheet">
    <!-- Modernizr -->

    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page-header">
    <div class="row">
        <div class="col-sm-3">
            <h1>Logo</h1>
        </div>
        <div class="col-sm-6 bottom-menu">
            <a class="btn btn-primary" href="index.html">Home</a>
            <a class="btn btn-primary" href="chisiamo.html">Chi Siamo</a>
            <a class="btn btn-primary" href="supporto.html">Supporto</a>
            <a class="btn btn-primary" href="faq.html">F.A.Q.</a>
        </div>
        <div class="col-sm-3">
            <a class="btn btn-primary-alt" href="registrazione.php">Registrati</a>
        </div>
    </div>
</div>
<div class="container">
    <form action="1projectphp.php" method="post">
        <input type="hidden" name="step" value="0">
    <h3>ACCEDI</h3>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label" for="mail-certificatore">Inserisci il tuo indirizzo e-mail</label>
                    <input type="email" name="email" id="mail-certificatore" class="form-control" >
                </div>
            </div><!-- col-sm-6 -->

        </div><!-- row -->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label" for="pass-certificatore">Inserisci la tua password</label>
                    <input type="password" name="password" id="pass-certificatore" class="form-control" >
                </div>
            </div><!-- col-sm-6 -->
        </div>
    </div>
    <div class="panel-footer">
        <a href="accedi.html"> <button type="submit" class="btn btn-primary pull-right btn-avanti">Accedi</button></a>
    </div>
        </form>
</div>
<div class="footer">
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
            <a href="#">APE certificazione energetica</a> |
            <a href="#"> Copyright</a> |
            <a href="#">Privacy e policy</a>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
</div>
<!-- jQuery e plugin JavaScript  -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>