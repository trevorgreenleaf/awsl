<?php

require 'vendor/autoload.php';
// load up the data from the env
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

// GO HERE TO CREATE USER AND MAKE KEYS
// https://console.aws.amazon.com/iam/home?region=us-west-2#/users
$client = new Aws\Comprehend\ComprehendClient([
    'version' => 'latest',
    'region'  => 'us-west-2',
    'credentials' => array(
        'key'    => getenv('AWS_KEY'),
        'secret' => getenv('AWS_SECRET')
    )
]);

$result = $client->batchDetectSentiment([
	'LanguageCode' => 'en',
	'TextList' => ['that is negative']
]);


// $result = $client->batchDetectEntities([
// 	'LanguageCode' => 'en',
// 	'TextList' => ['The city Pasadena is a really nice city!']
// ]);


var_dump($result);


