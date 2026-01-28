<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emuārs</title>
    <link rel="stylesheet" href="style.css">

    </head>
<body>

<h1>category</h1>
<form>
    <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>' />
<button>Meklēt</button>
</form>

<?php
echo "<ul>";
    foreach($categories as $category) {
        echo "<li>" . $category["category_name"] . "</li>";
    }
echo "</ul>";
?>

</body>
</html>