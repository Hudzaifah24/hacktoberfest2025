<?php
$quotes = [
    "Stay hungry, stay foolish.",
    "The best way to get started is to quit talking and begin doing.",
    "Don't watch the clock; do what it does. Keep going.",
    "Success is not final, failure is not fatal."
];
echo "Quote of the day: " . $quotes[array_rand($quotes)];
?>
