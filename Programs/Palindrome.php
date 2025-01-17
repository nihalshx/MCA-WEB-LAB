<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $inputString = trim($_POST['inputString']);
        if ($inputString === strrev($inputString)) {
            echo "<p>'$inputString' is a palindrome.</p>";
        } else {
            echo "<p>'$inputString' is not a palindrome.</p>";
        }
    }
    ?>
</body>
</html>