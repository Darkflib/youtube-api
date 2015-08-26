<?php

require_once 'vendor/autoload.php';

  $client = new Google_Client();
  $client->setApplicationName("Client_Library_Examples");
  $client->setDeveloperKey("");

  $service = new Google_Service_YouTube($client);
//  $optParams = array('q' => 'RQxXf6MYpzw');
//  $results = $service->search->listSearch('snippet,id', $optParams);

    $optParams = array('id' => 'RQxXf6MYpzw');
    $results = $service->videos->listVideos('snippet,id,contentDetails,liveStreamingDetails,player', $optParams);

print_r($results);



//  foreach ($results as $item) {
//    echo $item['volumeInfo']['title'], "<br /> \n";
//  }
