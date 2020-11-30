<?php

include "calendarFunctions.php";

$annee = $_GET["annee"];
$annee_suiv = $annee + 1;
$annee_prev = $annee - 1;

$html = <<<HTML
 <!doctype html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title> My first HTML5 page </title>
            <link rel="stylesheet" media="screen" href="style.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.css" />
        </head>
        <body>
            <h1>Calendrier $annee</h1>

            <div class = 'container'>
                
HTML;

for ($i = 0; $i <= 2; $i++){
    $html .="<div class = 'row'>";
    if ($i == 0){

        $html .=<<<HTML
        <div class = 'col-md-2 precedent'>
            <a href = 'calendar.php?annee=$annee_prev'><-</a>
        </div>
HTML;

    } else {
        $html .= "<div class = 'col-md-2'></div>";
    }

    for ($j= 1; $j <= 4; $j++){

        $html .= "<div class='col-md-2'>";

        $html .= calendar($i*4+$j, $annee, False);
        $html .= "</div>";
    }
    if ($i == 0){

        $html .=<<<HTML
        <div class = 'col-md-2 suivant'>
            <a href = 'calendar.php?annee=$annee_suiv'>-></a>
        </div>
HTML;

    } else {
        $html .= "<div class = 'col-md-2'></div>";
    }
    $html .= "</div>";
}




$html .=<<<HTML
                </div>
            </div>
        </body>
    </html>
HTML;

echo($html);