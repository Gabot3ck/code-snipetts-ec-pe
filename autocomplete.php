<?php
  //Google API Key
  $google_api_key = "AIzaSyBmmM8EFQ-a32v1yoAdjyaLLLYaBj8A-gY";

  //Get search query from the request
  $query = isset($_GET['query']) ? $_GET['query'] : '';

  if (!empty($query)){
    //API endpoint
    $url = "https://maps.googleapis.com/maps/api/place/autocomplete/json";

    //API request parameters
    $params = [
      'input' => $query,
      'types' => 'geocode', // optional: Restirct results to adress
      'language' => 'en', // language
      'key' => $google_api_key,
      'components' => 'country:pe' // Restrict results to country
    ];

    //Build query string
    $query_string = http_build_query($params);

    //Full API URL
    $apiURL = $url . '?' . $query_string;

    //Use cURL to fetch data
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiURL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    //Parse JSON response
    $data = json_decode($response, true);

    //Outpout results
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
  } else {
    echo json_encode(['error' => 'No query provided']);
    exit;
  }