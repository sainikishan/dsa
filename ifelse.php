<!-- index.php -->
<form method="post">
    Enter a number: <input type="number" name="number" required>
    Enter a number: <input type="number" name="numbe" required>
    <button type="submit">Check</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $numbe = $_POST['numbe'];

    if ($number > $numbe) {
        echo "The number is positive: $number";
    } elseif ($number < $numbe) {
        echo "The number is negative: $number";
    } else {
        echo "The number is zero.";
    }
}
?>