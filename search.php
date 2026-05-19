<?php

include 'db.php';

$query = $_GET['q'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Enterprise Search</title>

<style>

body{
    font-family: Arial, sans-serif;
    background:#f4f6f9;
    margin:0;
    padding:40px;
}

.container{
    max-width:900px;
    margin:auto;
}

.search-box{
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
    margin-bottom:20px;
}

.search-form{
    display:flex;
    gap:10px;
}

.search-input{
    flex:1;
    padding:14px;
    font-size:16px;
    border:1px solid #ccc;
    border-radius:6px;
}

.search-btn{
    padding:14px 24px;
    background:#0b1f3a;
    color:white;
    border:none;
    border-radius:6px;
    cursor:pointer;
    font-weight:bold;
}

.search-btn:hover{
    background:#132d52;
}

.result-card{
    background:white;
    padding:18px;
    margin-bottom:15px;
    border-radius:10px;
    box-shadow:0 2px 8px rgba(0,0,0,0.08);
}

.result-title{
    font-size:20px;
    font-weight:bold;
    margin-bottom:8px;
}

.result-title a{
    text-decoration:none;
    color:#0b1f3a;
}

.result-url{
    color:#1e7d4a;
    font-size:14px;
    margin-bottom:8px;
}

.result-category{
    display:inline-block;
    background:#e8eef7;
    color:#0b1f3a;
    padding:4px 10px;
    border-radius:20px;
    font-size:12px;
    font-weight:bold;
    margin-bottom:10px;
}

.score{
    font-size:12px;
    color:#777;
    margin-top:10px;
}

.no-results{
    background:white;
    padding:20px;
    border-radius:10px;
    text-align:center;
}

</style>

</head>

<body>

<div class="container">

<div class="search-box">

<h1>Enterprise Search</h1>

<form class="search-form" method="GET">

<input
type="text"
name="q"
class="search-input"
placeholder="Search VPN, Leave, Salary..."
value="<?php echo htmlspecialchars($query); ?>"
>

<button class="search-btn">
Search
</button>

</form>

</div>

<?php

if(!empty($query)){

$sql = "

SELECT *,

MATCH(title, keywords, content)
AGAINST(?) AS score

FROM search_index

WHERE MATCH(title, keywords, content)
AGAINST(?)

ORDER BY score DESC

";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ss", $query, $query);

$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){

while($row = $result->fetch_assoc()){

echo '

<div class="result-card">

<div class="result-title">
<a href="'.$row['url'].'">
'.$row['title'].'
</a>
</div>

<div class="result-url">
'.$row['url'].'
</div>

<div class="result-category">
'.$row['category'].'
</div>

<div>
'.$row['content'].'
</div>

<div class="score">
Relevance Score: '.round($row['score'],2).'
</div>

</div>

';

}

} else {

echo '

<div class="no-results">

<h2>No Results Found</h2>

<p>Try searching different keywords.</p>

</div>

';

}

}

?>

</div>

</body>
</html>