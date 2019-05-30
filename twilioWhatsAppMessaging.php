<?php

require __DIR__ . "/vendor/autoload.php";

use Twilio\Rest\Client;

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$sid    = getenv('TWILIO_SID');
$token  = getenv('TWILIO_TOKEN');


$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create(
                      "whatsapp:+254716915775",
                      [
                               "mediaUrl" => ["https://images.unsplash.com/photo-1431250620804-78b175d2fada?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=900&fit=crop&ixid=eyJhcHBfaWQiOjF9"],
                               "from" => "whatsapp:+14155238886",
                               "body" => "Snacks maybe?"
                      ]
                  );
