<?php

include 'db.php';

$q = $_GET['q'] ?? '';

if(empty($q)){
    die("No search query");
}

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

$stmt->bind_param("ss", $q, $q);

$stmt->execute();

$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Enterprise Search</title>

<style>

:root{
    --navy:#0b1f3a;
    --navy2:#132d52;
    --accent:#c8922a;
    --bg:#eef2f7;
    --white:#ffffff;
    --text:#1f2937;
    --muted:#6b7280;
    --border:#d5dce8;
}

body{
    margin:0;
    font-family:Arial,sans-serif;
    background:var(--bg);
    color:var(--text);
}

/* HEADER */

.topbar{
    background:var(--navy);
    border-bottom:4px solid var(--accent);
    padding:18px 40px;
}

.logo{
    color:white;
    font-size:24px;
    font-weight:bold;
}

.sub{
    color:#8fb0d3;
    font-size:13px;
    margin-top:3px;
}

/* SEARCH SECTION */

.search-wrap{
    max-width:1000px;
    margin:40px auto 20px;
    padding:0 20px;
}

.search-box{
    background:white;
    border-radius:12px;
    padding:18px;
    box-shadow:0 4px 14px rgba(0,0,0,0.08);
    border:1px solid var(--border);
}

.search-form{
    display:flex;
    gap:10px;
}

.search-input{
    flex:1;
    padding:15px;
    border:1px solid #cfd7e3;
    border-radius:8px;
    font-size:16px;
}

.search-input:focus{
    outline:none;
    border-color:var(--accent);
}

.search-btn{
    background:var(--accent);
    border:none;
    color:var(--navy);
    padding:0 26px;
    border-radius:8px;
    font-weight:bold;
    cursor:pointer;
}

.search-btn:hover{
    opacity:.92;
}

/* RESULT HEADER */

.result-header{
    margin:25px 0 15px;
}

.result-title{
    font-size:30px;
    font-weight:bold;
    color:var(--navy);
}

.result-meta{
    color:var(--muted);
    margin-top:6px;
}

/* RESULTS */

.results{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.result-card{
    background:white;
    border-radius:12px;
    border:1px solid var(--border);
    padding:22px;
    box-shadow:0 3px 10px rgba(0,0,0,0.06);
    transition:.2s;
}

.result-card:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(0,0,0,0.10);
}

.result-link{
    text-decoration:none;
    color:var(--navy);
    font-size:24px;
    font-weight:700;
}

.result-link:hover{
    color:var(--navy2);
}

.result-url{
    margin-top:8px;
    color:#1f7a47;
    font-size:14px;
}

.category{
    display:inline-block;
    margin-top:12px;
    background:#e7eef9;
    color:var(--navy);
    padding:5px 12px;
    border-radius:20px;
    font-size:12px;
    font-weight:bold;
}

.score{
    margin-top:12px;
    font-size:12px;
    color:var(--muted);
}

.empty{
    background:white;
    border-radius:12px;
    padding:40px;
    text-align:center;
    border:1px solid var(--border);
}

.back-link{
    display:inline-block;
    margin-top:25px;
    color:var(--navy);
    text-decoration:none;
    font-weight:bold;
}

.back-link:hover{
    text-decoration:underline;
}

</style>

</head>

<body>

<div class="topbar">

    <div class="logo">
        NEXCORP Enterprise Search
    </div>

    <div class="sub">
        Internal Discovery & Search Engine
    </div>

</div>

<div class="search-wrap">

    <div class="search-box">

        <form class="search-form" method="GET">

            <input
                type="text"
                name="q"
                class="search-input"
                value="<?php echo htmlspecialchars($q); ?>"
                placeholder="Search systems, employees, VPN, payroll..."
            >

            <button class="search-btn">
                Search
            </button>

        </form>

    </div>

    <div class="result-header">

        <div class="result-title">
            Search Results
        </div>

        <div class="result-meta">
            Query:
            <strong><?php echo htmlspecialchars($q); ?></strong>
        </div>

    </div>

    <div class="results">

<?php

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

        echo "

        <div class='result-card'>

            <a class='result-link' href='{$row['url']}'>
                {$row['title']}
            </a>

            <div class='result-url'>
                {$row['url']}
            </div>

            <div class='category'>
                {$row['category']}
            </div>

            <div class='score'>
                Relevance Score:
                ".round($row['score'],2)."
            </div>

        </div>

        ";

    }

}else{

    echo "

    <div class='empty'>

        <h2>No results found</h2>

        <p>Try different keywords.</p>

    </div>

    ";

}

?>

    </div>

    <a class="back-link" href="portal.php">
        ← Back to Portal
    </a>

</div>

</body>
</html>