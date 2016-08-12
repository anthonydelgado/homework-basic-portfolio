<?php
/**
 * Send an Email using the Sendgrid API
 */
require 'vendor/autoload.php';

$SENDGRID_USERNAME = getenv('SENDGRID_USERNAME');
$SENDGRID_PASSWORD = getenv('SENDGRID_PASSWORD');
$PERSONAL_EMAIL = getenv('PERSONAL_EMAIL');

$sendgrid = new SendGrid($SENDGRID_USERNAME, $SENDGRID_PASSWORD);

$email = new SendGrid\Email();
$email->addTo($PERSONAL_EMAIL)
    ->setFrom($PERSONAL_EMAIL)
    ->setSubject('New Email from your website!')
    ->setText(strip_tags($_POST['textarea']))
    ->setHtml($_POST['textarea']);

$response = $sendgrid->send($email);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

exit;