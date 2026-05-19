<?php

include 'db.php';

/*
|--------------------------------------------------------------------------
| LOAD PORTAL PAGE
|--------------------------------------------------------------------------
*/

$html = file_get_contents("portal.php");

/*
|--------------------------------------------------------------------------
| PARSE HTML
|--------------------------------------------------------------------------
*/

libxml_use_internal_errors(true);

$dom = new DOMDocument();
$dom->loadHTML($html);

libxml_clear_errors();

/*
|--------------------------------------------------------------------------
| GET ALL LINKS
|--------------------------------------------------------------------------
*/

$links = $dom->getElementsByTagName('a');

/*
|--------------------------------------------------------------------------
| CLEAR OLD INDEX
|--------------------------------------------------------------------------
*/

$conn->query("TRUNCATE TABLE search_index");

/*
|--------------------------------------------------------------------------
| LOOP THROUGH LINKS
|--------------------------------------------------------------------------
*/

foreach($links as $link){

    $title = trim($link->nodeValue);

    $url = trim($link->getAttribute('href'));

    /*
    |--------------------------------------------------------------------------
    | SKIP EMPTY
    |--------------------------------------------------------------------------
    */

    if(empty($title) || empty($url)){
        continue;
    }

    /*
    |--------------------------------------------------------------------------
    | GENERATE KEYWORDS
    |--------------------------------------------------------------------------
    */

    $keywords = strtolower($title);

    /*
    |--------------------------------------------------------------------------
    | SIMPLE CATEGORY DETECTION
    |--------------------------------------------------------------------------
    */

    $category = "General";

    if(stripos($title, 'vpn') !== false){
        $category = "VPN";
    }

    elseif(stripos($title, 'leave') !== false){
        $category = "HR";
    }

    elseif(stripos($title, 'salary') !== false){
        $category = "Payroll";
    }

    elseif(stripos($title, 'ticket') !== false){
        $category = "IT";
    }

    elseif(stripos($title, 'security') !== false){
        $category = "Security";
    }

    elseif(stripos($title, 'finance') !== false){
        $category = "Finance";
    }

    /*
    |--------------------------------------------------------------------------
    | INSERT INTO DATABASE
    |--------------------------------------------------------------------------
    */

    $stmt = $conn->prepare("
        INSERT INTO search_index
        (title, url, category, keywords, content)
        VALUES (?, ?, ?, ?, ?)
    ");

    $content = $title;

    $stmt->bind_param(
        "sssss",
        $title,
        $url,
        $category,
        $keywords,
        $content
    );

    $stmt->execute();

    echo "Indexed: " . $title . "<br>";
}

echo "<hr>";
echo "<h2>Crawling Completed</h2>";

?>