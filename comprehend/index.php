<?php
// load all of the vendor packages
require 'vendor/autoload.php';

// load up the data from the env
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

// instantiate the Comprehend class so we make requests with it
$client = new Aws\Comprehend\ComprehendClient([
    'version' => 'latest',
    'region'  => 'us-west-2',
    'credentials' => array(
        'key'    => getenv('AWS_KEY'),
        'secret' => getenv('AWS_SECRET')
    )
]);

// detecting the texts sentiment
$result = $client->batchDetectSentiment([
	'LanguageCode' => 'en',
	'TextList' => ['that is negative']
]);


// detecting entities in the text
// $result = $client->batchDetectEntities([
// 	'LanguageCode' => 'en',
// 	'TextList' => ['The city Pasadena is a really nice city!']
// ]);

// print out the results so we can see it
print_r($result);


