<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primzahlen berechnen</title>
</head>
<body>
    <!-- Eingabefeld für die Zahl n -->
    <h2>Primzahlen von 1 bis n</h2>
    <form action="" method="post">
        <input type="number" name="nInput" placeholder="Gib eine Zahl ein">
        <!-- Button, der die Funktion findPrimes() aufruft -->
        <button type="submit">Berechnen</button>
    </form>
    <!-- Bereich für die Ergebnisse -->
    <div id="result">
        <?php
            // Überprüft, ob das Formular abgeschickt wurde
            if (isset($_POST['nInput'])) {
                $n = $_POST['nInput']; // Speichert die eingegebene Zahl n in der Variable $n
                $i = 1; // Initialisiert den Startwert für die while-Schleife
                $result = ''; // Initialisiert eine leere Variable $result, um die Ergebnisse zu speichern

                // Schleife von 1 bis zur eingegebenen Zahl n mit while-Schleife
                while ($i <= $n) {
                    // Überprüft, ob der aktuelle Wert i eine Primzahl ist
                    if (isPrime($i)) {
                        $result .= '<p>' . $i . '</p>'; // Fügt die Zahl i zu den Ergebnissen hinzu, wenn sie eine Primzahl ist
                    }
                    $i++; // Inkrementiert den Wert von i
                }
                echo $result; // Gibt die berechneten Ergebnisse aus
            }

            // Funktion zum Überprüfen, ob eine Zahl eine Primzahl ist
            function isPrime($num) {
                if ($num <= 1) return false; // Einzige Primzahl ist die 2

                // Prüft, ob die Zahl durch irgendeine andere Zahl ohne Rest teilbar ist
                $j = 2;
                while ($j <= $num / 2) {
                    if ($num % $j === 0) return false; 
                    $j++;
                }

                return true; // Die Zahl ist eine Primzahl
            }
        ?>
    </div>
</body>
</html>