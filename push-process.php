<?php
// Include Pusher PHP library
include('Pusher.php');

// Your Pusher App credential
define('APP_KEY'    , 'YOUR_APP_KEY');
define('APP_SECRET' , 'YOUR_APP_SECRET');
define('APP_ID'     , 'YOUR_APP_ID');

// Channel and event name
define('CHANNEL'    , 'my_channel');
define('EVENT'      , 'notification');

// Get a submitted message
$message = trim(htmlspecialchars($_POST['message']));
// Create Pusher object
$pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);
// Data to be sent to Pusher
$data = array('message' => $message);
// Push data to Pusher
$pusher->trigger(CHANNEL, EVENT, $data);

// Redirect back to form
header('location: push.html');
