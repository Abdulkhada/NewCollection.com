<?php
// Sample data for search (replace with database queries or files as needed)
$pages = [
    [
        'title' => 'PHP Introduction',
        'url' => 'php_intro.html',
        'content' => 'Learn the basics of PHP programming language.'
    ],
    [
        'title' => 'HTML Tutorial',
        'url' => 'html_tutorial.html',
        'content' => 'This page covers HTML basics and tags.'
    ],
    [
        'title' => 'CSS Guide',
        'url' => 'css_guide.html',
        'content' => 'Here you will learn about CSS styling and layouts.'
    ],
    [
        'title' => 'JavaScript Overview',
        'url' => 'js_overview.html',
        'content' => 'Get started with JavaScript programming and dynamic websites.'
    ]
];

// Get the search query from the URL
$query = isset($_GET['query']) ? htmlspecialchars($_GET['query']) : '';

// If the query is empty, show a message
if (empty($query)) {
    echo "<h3>Please enter a search term.</h3>";
} else {
    echo "<h2>Search Results for: '$query'</h2>";

    // Search through the pages
    $results = [];
    foreach ($pages as $page) {
        // Check if the query exists in the content or title
        if (stripos($page['title'], $query) !== false || stripos($page['content'], $query) !== false) {
            $results[] = $page;
        }
    }

    // Display results like Google
    if (count($results) > 0) {
        echo "<div class='results-container'>";
        foreach ($results as $result) {
            echo "<div class='result-item'>";
            echo "<a href='" . $result['url'] . "'><strong>" . $result['title'] . "</strong></a><br>";
            echo "<span class='url'>" . $result['url'] . "</span><br>";
            echo "<p>" . substr($result['content'], 0, 150) . "...</p>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<p>No results found for '$query'.</p>";
    }
}
?>
<a href="index.html">Back to Search</a>
