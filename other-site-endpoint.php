<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the key was submitted via POST
    if (isset($_POST['key'])) {
        $receivedKey = $_POST['key'];

        // Process the received key, e.g., store it, validate it, etc.
        echo "Received key: " . $receivedKey;
    } else {
        echo "Key not provided.";
    }
} else {
    echo "Invalid request method.";
}
?>
