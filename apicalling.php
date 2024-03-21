<?php

$api_key = 'bd1b63d224c84950acae61bd5e9def0a';
$query = 'tesla';
$from = '2023-11-26';
$sortBy = 'publishedAt';

// API endpoint
$api_url = "https://newsapi.org/v2/everything?q=" . urlencode($query) . "&from=" . urlencode($from) . "&sortBy=" . urlencode($sortBy) . "&apiKey=" . urlencode($api_key);

// Initialize cURL session
$ch = curl_init($api_url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set the User-Agent header
curl_setopt($ch, CURLOPT_USERAGENT, 'YourAppName/1.0');

// Execute cURL session and fetch data
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    die('Curl error: ' . curl_error($ch));
}

// Close cURL session
curl_close($ch);

// Decode JSON response
$data = json_decode($response, TRUE);

// Check if the decoding was successful
if ($data === NULL) {
    die('Error decoding JSON data from the News API');
}

// Check if the "articles" key exists
if (!isset($data['articles'])) {
    die('No articles found in the API response');
}

// Display the news articles
foreach ($data['articles'] as $article) {
    echo '<h2>' . $article['title'] . '</h2>';
    echo '<p>' . $article['description'] . '</p>';
    echo '<p>Author: ' . $article['author'] . '</p>';
    echo '<p>Published at: ' . $article['publishedAt'] . '</p>';
    echo '<hr>';
}

?>
