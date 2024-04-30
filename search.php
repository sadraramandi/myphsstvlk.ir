<?php
$query = $_GET['query'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results for "<?php echo htmlspecialchars($query); ?>"</h1>
    <!-- Results Go Here -->
</body>
</html>
