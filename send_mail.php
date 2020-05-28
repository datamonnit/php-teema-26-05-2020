<?php
$to = "tuomas@gmail.com";
$aihe = "Postin aihe";
$viesti = "Sinulle postia!";
$headers = "From: webmaster@example.com";

echo mail($to, $aihe, $viesti, $headers);