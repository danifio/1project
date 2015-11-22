<?php
    connect();

	if (isset($_POST['step'])) {
		$step = $_POST['step'];
	} else {
		$step = 0;
	}
    echo $step;

    if($step > 0 || $step == 0){

        switch($step){
            case 0:
                step0();
                break;
            case 1:
                step1();
                require('accesso.php');
                break;
            case 3:

        }
    }
    else {
        echo "Error. Step not present";
    }

    function step0()
    {
        global $mysqli;

        if ($_POST['password'] == "") echo "Inserire password";
        if ($_POST['email'] == "") echo "Campo vuoto. Inserire email";
        if ($_POST['consenso']==0) echo "Accettare il trattamento dei dati personali";
        if (!mberegi('^[a-z0-9][_.a-z0-9-]+@([a-z0-9][0-9a-z-]+.)+([a-z]{2,4})', $_POST['email'])) {
                echo "Indirizzo email NON valido";
            } else {
                echo "Indirizzo email valido";
            $query_accesso = "INSERT INTO registrazione (password, email, consenso)
                         VALUES ('{$_POST['password']}','{$_POST['email']}','{$_POST['consenso']}')";

            mysqli_query($mysqli, $query_accesso) or die(mysqli_error($mysqli));

        }
    }

    function step1(){
        global $mysqli;


    }

    function connect(){
        global $mysqli;

        //error_reporting(E_ALL);

        $mysqli = new mysqli("localhost", "root", "root", "1project");
        if (mysqli_connect_errno()){
            echo "Errore di connessione";
            exit();
        }
        else{
            echo "Connessione corretta";
        }

    }

    function disconnect()
    {
        global $mysqli;
        mysqli_close($mysqli);

    }