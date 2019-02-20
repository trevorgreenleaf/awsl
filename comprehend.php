<?php

require 'vendor/autoload.php';

// GO HERE TO CREATE USER AND MAKE KEYS
// https://console.aws.amazon.com/iam/home?region=us-west-2#/users
$client = new Aws\Comprehend\ComprehendClient([
    'version' => 'latest',
    'region'  => 'us-west-2',
    'credentials' => array(
        'key'    => 'PUT_YOUR_KEY',
        'secret' => 'PUT_YOUR SECRET'
    )
]);

$result = $client->batchDetectSentiment([
	'LanguageCode' => 'en',
	'TextList' => ['that is negative']
]);

var_dump($result);


