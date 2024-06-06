1. File Upload Form and Processing
 obrazac.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File Form</title>
</head>
<body>
    <form action="obrada.php" method="post" enctype=.................multipart/form-data">
        
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submit">
    </form>
</body>
</html>


obrada.php
<?php
if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    
    if ($_FILES["fileToUpload"]["size"] == 0) {
        echo "Niste odabrali datoteku za upload.";
        $uploadOk = 0;
    }

    // Check if the file is an image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check === false) {
        echo "Datoteka nije slika.";
        $uploadOk = 0;
    }

    // Create a new directory for storage
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Store the uploaded file
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Datoteka " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " je uspješno pohranjena.";
        } else {
            echo "Dogodila se greška prilikom pohrane datoteke.";
        }
    }
}
?>

2. Currency Converter Form
tecajnica.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konverter valuta</title>
</head>
<body>
    <form action="" method="post">
        .......iznos u EUR:
        <input type="number" name="eur" step="0.01" min="0" required>
        <input type="submit" value="Konvertiraj">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $eur = $_POST["eur"];
        $usd = $eur * 1.21; // Assumption: 1 EUR = 1.21 USD
        echo "$eur EUR = $usd USD";
    }
    ?>
</body>
</html>

3. Basic Calculator
 kalkulator.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num1" step="0.01" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" step="0.01" required>
        <input type="submit" value="Izračunaj">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Nemoguće dijeliti s nulom";
                }
                break;
            default:
                $result = "Nepoznat operator";
                break;
        }

        echo "Rezultat: $result";
    }
    ?>
</body>
</html>