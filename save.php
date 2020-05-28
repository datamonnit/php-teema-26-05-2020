<?php
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        die('Et tullut lomakkeelta!');
    }

    if (!isset($_POST['nimi']) || !isset($_POST['palaute'])) {
        die('Et tullut oikealta lomakkeelta');
    }

    // Syötteen tarkistus!

    $nimi = $_POST['nimi'];
    $palaute = $_POST['palaute'];
    $pvm = date("d.m.Y");

    // Tietojen tallennus
    $file = fopen('palautteet.txt', 'a') or die('Tiedoston avaaminen ei onnistu');
    $rivi = "<p>$nimi<br>$palaute<br>$pvm</p>" . PHP_EOL;
    fwrite($file, $rivi);


    // Tietojen lähetys sähköpostiin
    $to = "tuomas@gmail.com";
    $aihe = "Uusi palaute saapunut!";
    $viesti = "Sait uuden palautteen:" . PHP_EOL . $rivi;
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8";

    mail($to, $aihe, $viesti, $headers);

    // header('Location: palautteet.php');
?>
