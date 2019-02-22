<?php
// load all of the vendor packages
require '../init.php';

// instantiate the PollyClient class so we make requests with it
$client = new Aws\Polly\PollyClient([
    'version' => 'latest',
    'region'  => 'us-west-2',
    'credentials' => array(
        'key'    => getenv('AWS_KEY'),
        'secret' => getenv('AWS_SECRET')
    )
]);

// basic example
$text = "This is just a basic example";


// make it more life like
// https://docs.aws.amazon.com/polly/latest/dg/supported-ssml.html
// $text = "<speak>Hello <break time='300ms'/>  <emphasis level='strong'>how</emphasis> can I <break time='300ms'/> Help you today?</speak>";


// send the text 
$result = $client->synthesizeSpeech([
    'OutputFormat' => 'mp3', // REQUIRED
    'Text' => $text, // REQUIRED

    // possible English voice
    // https://docs.aws.amazon.com/polly/latest/dg/voicelist.html
    // Ivy -> young girl
    // Joanna -> women 
    // Kendra -> women a little deeper 
    // Kimberly -> women a little bit tangy
    // Salli -> Young women

    // Joey -> man
    // Justin -> young boy
    // Matthew -> Man a little deeper

    'VoiceId' => 'Salli', // REQUIRED
    // 'TextType' => 'ssml', //OPTIONAL turn on for fancy
]);
 
 // get the audio that we got back 
$newdata = $result->get('AudioStream');

// create a audio file and store it in the polly folder
$myfile = fopen("test.mp3", "w");
fwrite($myfile, $newdata);
fclose($myfile);