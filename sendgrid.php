<?php
/**
 * Send an Email using the Sendgrid API
 */
require 'vendor/autoload.php';

//$SENDGRID_USERNAME = getenv('SENDGRID_USERNAME');
//$SENDGRID_PASSWORD = getenv('SENDGRID_PASSWORD');
$PERSONAL_EMAIL = getenv('PERSONAL_EMAIL');
//$BODY_EMAIL = $_POST['textarea'];

$from = new SendGrid\Email(null, $PERSONAL_EMAIL);
$subject = "Hello World from the SendGrid PHP Library!";
$to = new SendGrid\Email(null, $PERSONAL_EMAIL);
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

exit;