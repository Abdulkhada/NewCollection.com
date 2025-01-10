<?php
// Function to get weather data using OpenWeatherMap API
function getWeatherData($city, $apiKey) {
    // Ensure that the city and API key are properly inserted into the URL
    $url = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=" . $apiKey . "&units=metric";
    
    // Initialize cURL session
    $ch = curl_init();
    
    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url); // Set the URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
    
    // Execute the cURL session
    $response = curl_exec($ch);
    
    // Check for any cURL errors
    if(curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
        return null;
    }
    
    // Close the cURL session
    curl_close($ch);
    
    // Decode the JSON response into a PHP array
    return json_decode($response, true);
}

// Replace with your OpenWeatherMap API key
$apiKey = 'YOUR_API_KEY'; // Get your key from https://openweathermap.org/api
$city = 'London'; // Example city, you can change this

// Fetch the weather data
$data = getWeatherData($city, $apiKey);

// Check if the data is available
if ($data && isset($data['main'])) {
    // Display the weather data
    echo "Weather in $city:<br>";
    echo "Temperature: " . $data['main']['temp'] . "°C<br>";
    echo "Humidity: " . $data['main']['humidity'] . "%<br>";
    echo "Weather: " . $data['weather'][0]['description'] . "<br>";
} else {
    echo "Unable to fetch weather data for $city. Please try again later.";
}
?>
