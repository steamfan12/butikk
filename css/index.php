<?php
    //For å hindre brukere å se mapper de ikke har tilgang på
    header('Location: ..'); //Gå en mappe opp index filen i denne mappen vil deretter vises
                            //for å gå flere mapper opp ../..
    // or die();
    //exit();
?>