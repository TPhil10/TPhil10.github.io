<?php

function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}
if(is_ajax()) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $people = $_POST['number'];
    $time = $_POST['time'];
    $when = $_POST['when'];

    $header = "From:" . $email . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n"
        $header .= "Mime-version: 1.0 \r\n";
        $header .= "content-Type: text/plain";

    $body = "Name: " . $name . "\r\n";
    $body .= = "Email " . $email . "\r\n";
    $body .= = "For " . $people . "\r\n";
    $body .= = "Reservation Day " . $when . "\r\n";
    $body .= = "Time " . $time . "\r\n";
    $body .= = "This reservation was made on the website";

    $for = "someone@domain.com";
    $subject = "New Reservation!!";
    mail($for, $subject, $subject, $header);

    echo json_encode(array(
        'message' => 'Reservation Submitted',
        'name' => $name
    ));

} else {
    die("No!");
}