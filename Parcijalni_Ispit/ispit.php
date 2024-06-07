
<?php
// Function to analyze the word
function analyzeWord($word) {
    $vowels = 0;
    $consonants = 0;
    $word = strtolower($word);

    for ($i = 0; $i < strlen($word); $i++) {
        if (ctype_alpha($word[$i])) {
            if (in_array($word[$i], ['a', 'e', 'i', 'o', 'u'])) {
                $vowels++;
            } else {
                $consonants++;
            }
        }
    }

    return [
        'vowels' => $vowels,
        'consonants' => $consonants
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newWord = trim($_POST['newWord']);

    if (!empty($newWord)) {
        // Read the JSON file using __DIR__
        $jsonFile = __DIR__ . '/data/words.json';
        $json = file_get_contents($jsonFile);
        $data = json_decode($json, true);

        // Analyze the new word
        $analysis = analyzeWord($newWord);

        // Add the new word to the data
        $data['words'][] = [
            'word' => $newWord,
            'vowels' => $analysis['vowels'],
            'consonants' => $analysis['consonants'],
            'totalLetters' => strlen($newWord)
        ];

        // Save the updated data back to the JSON file
        file_put_contents($jsonFile, json_encode($data));
    }

    // Refresh the page to display the updated data
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Analyzer</title>
    <style>
        .flex-container {
            display: flex;
            justify-content: center;
            gap: 10%;
            flex-direction: row-reverse;
            padding: 20px;
        }
        .table-container, .form-container {
            width: 45%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="flex-container">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Word</th>
                        <th>Vowels</th>
                        <th>Consonants</th>
                        <th>Total Letters</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Read and display words from JSON file using __DIR__
                    $jsonFile = __DIR__ . '/data/words.json';
                    if (file_exists($jsonFile)) {
                        $json = file_get_contents($jsonFile);
                        $data = json_decode($json, true);

                        if (isset($data['words']) && is_array($data['words'])) {
                            foreach ($data['words'] as $wordData) {
                                echo "<tr>";
                                echo "<td>{$wordData['word']}</td>";
                                echo "<td>{$wordData['vowels']}</td>";
                                echo "<td>{$wordData['consonants']}</td>";
                                echo "<td>{$wordData['totalLetters']}</td>";
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="form-container">
            <form action="" method="POST">
                <label for="newWord">Enter a new word:</label>
                <input type="text" id="newWord" name="newWord" required>
                <button type="submit">Add Word</button>
            </form>
        </div>
    </div>
</body>
</html>
