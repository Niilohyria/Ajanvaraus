<?php
$palvelin = "localhost";
$kayttajatunnus = "root";
$salasana = "";
$tietokanta = "varaus";
$conn = new mysqli($palvelin, $kayttajatunnus, $salasana, $tietokanta);
$nimi = $_POST['nimi'];
$paivamaarajaaika = $_POST['paivamaarajaaika'];
$sql = "INSERT INTO varaukset (nimi, paivamaarajaaika) VALUES ('$nimi', '$paivamaarajaaika')";
if ($conn->query($sql) === TRUE) {
    echo "Varaus tallennettu!";
} else {
    echo "Virhe: " . $sql . "<br>" . $conn->error;
}
$conn->close();