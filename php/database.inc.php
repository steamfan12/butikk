<?php
/*Innlogging til databasen vår 
    Sikkerhetsmessing bør denne infoen ligge i en egen fil
    utenfor den mappen hvor filene er publisert på internett */

    $dbserver = "127.0.0.1"; //Dette er IP adressen til localhost
    $dbuser = "root"; //Brukernavnet ditt til databasen på din egen maskin
    $dbpassword = "root"; //Passordet til databasen din
    $dbname = "2024_bladunivers"; //Navnet til skjemaet til databasen du skal bruke

    //Oppretter forbindelse til databasen
    $kobling = new mysqli($dbserver,$dbuser,$dbpassword,$dbname); 
    //$kobling = mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname); 

    if($kobling->connect_error){ //Sjekker om oppkoblingen fungerte
        die("Noe gikk galt: ".$kobling->connect_error);
    }
    $kobling -> set_charset("utf8");  //Setter karaktersettet til utf8
?>