<?php
// Define the correct flag
$correct_flag = "CTF{y0u_f0unD_m3}";

// Check if the form is submitted and if the flag is correct
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitted_flag = $_POST['flag'];

    // Check if the submitted flag matches the correct one
    if ($submitted_flag === $correct_flag) {
        echo "<p>Flag correct! Well done!</p>";
    } else {
        echo "<p>Incorrect flag. Try again!</p>";
    }
}
?>

