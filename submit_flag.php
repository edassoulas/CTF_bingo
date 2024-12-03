<?php
// Define the correct flag
$correct_flag = "CTF{y0u_f0unD_m3}";

ob_start();

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

// End the output buffering and store the result in a variable
$content = ob_get_clean();

// Include the HTML structure, including the PHP result
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flag Submission Result</title>
</head>
<body>
    <h1>Base64 CTF Challenge</h1>
    <p>
        We intercepted a suspicious message during a covert operation. Can you decode it to uncover the hidden flag?
    </p>
    <?php echo $content; ?>
    <p><a href="index.html">Back to challenge</a></p>
</body>
</html>

