<?php
    if(isset($_POST['checkbox'])) {
    echo "Dodano rezerwację do bazy";
    $id_polaczenia = mysqli_connect('localhost', 'root', '', 'baza');
    
    $data = $_POST['data'];
    $liczba_osob = $_POST['liczba_osob'];
    $telefon = $_POST['telefon'];

    $zapytanie = "INSERT INTO rezerwacje (`nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES ('1', '$data', '$liczba_osob', '$telefon')";
    $wynik_zapytania = mysqli_query($id_polaczenia, $zapytanie);

    $id_polaczenia = mysqli_close($id_polaczenia);
    } else {
        echo "Musisz zaznaczyć checkbox aby kontynuować";
    }
    echo ('<br><br><input type="button" value="Powrót" onclick="window.location=(\'restauracja.html\')" />');
?>