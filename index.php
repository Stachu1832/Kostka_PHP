<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Kostka</title>
        </head>
            <body>
            
            </body>

<?php

$rzuty=$_GET['rzuty'];
$sciany=$_GET['sciany'];
for ($x = 1; $x <= $rzuty; $x++)
{
    echo(rand(1,$sciany)); 
    sleep(0.1);
    echo "<br>";
}

?>

            
    </html>