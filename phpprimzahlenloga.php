<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logarithmische Funktion</title>
</head>
<body>

<!-- Eingabefeld für die Zahl n und den Faktor -->
<h2>Logarithmische Funktion von 1 bis n</h2>
<form action="" method="post">
    <input type="number" name="nInput" placeholder="Gib eine Zahl ein">
    <input type="number" name="factorInput" placeholder="Gib einen Faktor ein">
    <!-- Button, der die Funktion ausführt -->
    <button type="submit">Berechnen</button>
</form>
    
<?php
// Überprüft, ob das Formular abgeschickt wurde
if (isset($_POST['nInput']) && isset($_POST['factorInput'])) {
    $n = $_POST['nInput']; // Speichert die eingegebene Zahl n in der Variable $n
    $factor = $_POST['factorInput']; // Speichert den Faktor für die Darstellung
    $result = ''; // Initialisiert eine leere Variable $result, um die Ergebnisse zu speichern

    // Schleife von 1 bis zur eingegebenen Zahl n
    $i = 1;
    while ($i <= $n) {
        $logResult = log($i); // Berechnet den Logarithmus von i
        $stars = round($logResult * $factor); // Berechnet die Anzahl der Sterne für die Darstellung

        // Erstellt einen String, der das Ergebnis und die Sterne enthält
        $result .= 'log(' . $i . ')=' . round($logResult, 2) . ' * ' . $factor . ' ';
        for ($j = 0; $j < $stars; $j++) {
            $result .= '*';
        }
        $result .= '<br>';
        $i++;
    }

    // Gibt die berechneten Ergebnisse aus
    echo $result;
}
?>

</body>
</html>