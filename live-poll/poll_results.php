<?php
// Path to the results JSON file
$file = 'poll_results.json';

// Get poll responses from the form
$responses = $_POST;

// Check if the results file exists, if not create it
if (!file_exists($file)) {
    file_put_contents($file, json_encode([]));
}

// Read the current data from the results file
$data = json_decode(file_get_contents($file), true);

// Update the counts for each question
foreach ($responses as $question => $answer) {
    if (!isset($data[$question])) {
        $data[$question] = [];
    }
    
    if (!isset($data[$question][$answer])) {
        $data[$question][$answer] = 0;
    }

    $data[$question][$answer]++;
}

// Save the updated data back to the file
file_put_contents($file, json_encode($data));

// Redirect to the results page
header('Location: results.php');
exit();
?>
