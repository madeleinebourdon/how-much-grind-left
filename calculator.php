<?php
include 'partials/header.php';
include 'partials/navbar.php';

function timeLeft() {
    $currentTimestamp = time();
    $targetTimestamp = strtotime('30 October 2018 01:00');

    $total = ($targetTimestamp - $currentTimestamp) / 60 / 60 / 24;
    $days = round($total);
    $hours = ($total - $days) * 24;
    $test = round($hours);
    $minutes = ($hours - $test) * 60;

    $hours = round($hours);
    $minutes = round($minutes);

    echo "There are <strong>" . $days. ' days, ' . $hours . ' hours and '  . $minutes . ' minutes</strong> left before the next reset.';
}

include 'partials/_calculator.html';
include 'partials/footer.php';
?>