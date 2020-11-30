<?php

include "calendarFunctions.php";

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
            <div class = 'container'>
                <div class = 'row'>
HTML;
                for ($i= 1; $i <= 12; $i++){
                    $html .= "<div class = 'col-md-4'>";
                    $html .= (calendar($i, 2020, True));
                    $html .= "</div>";
                }     

$html .=<<<HTML
                </div>
            </div>
        </body>
    </html>
HTML;

echo($html);

