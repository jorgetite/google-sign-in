<?php
/*
 * Copyright © 2017 Jorge Tite
 *
 * Please review the LICENSE file distributed with this software for full
 * copyright information.
 */

require_once '../vendor/autoload.php';

// Before you can integrate Google Sign-In into your website, you must have a
// Google API Console project. In the project, you create a client ID, which
// you need to call the sign-in API.
define("GOOGLE_CLIENT_ID", "YOUR_CLIENT_ID.apps.googleusercontent.com");

// Gets ID token via HTTPS POST.
$id_token = $_POST['id_token'];

// Use a Google Client to validate the ID token
$client = new Google_Client(['client_id' => GOOGLE_CLIENT_ID]);

// The verifyIdToken function verifies the JWT signature, the aud claim,
// the exp claim, and the iss claim.
$payload = $client->verifyIdToken($id_token);

// validates payload
if ($payload) {
    // user's unique Google ID from the sub claim.
    $user_id = $payload['sub'];

    // to restrict access to only members of your G Suite domain, also verify
    // the hd claim matches your G Suite domain name.

    //$domain = $payload['hd'];
} else {
    $user_id = "";
}

// sends back the user's unique Google ID
header('Content-type: application/json');
echo json_encode($user_id);