<?php
/**
 * Send an Email using the Sendgrid API
 */
require 'vendor/autoload.php';

$SENDGRID_USERNAME = getenv('SENDGRID_USERNAME');
$SENDGRID_PASSWORD = getenv('SENDGRID_PASSWORD');
$PERSONAL_EMAIL = getenv('PERSONAL_EMAIL');
//$BODY_EMAIL = $_POST['textarea'];

$sendgrid = new SendGrid($SENDGRID_USERNAME, $SENDGRID_PASSWORD);
//strip_tags($_POST['textarea'])
$email = new SendGrid\Email();
$email->addTo($PERSONAL_EMAIL)
    ->setFrom($PERSONAL_EMAIL)
    ->setSubject('New Email from your website!')
    ->setText('New Email from your website!');

$response = $sendgrid->send($email);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

exit;