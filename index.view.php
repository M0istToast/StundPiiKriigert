<!DOCTYPE html>
<html lang="lv">
    <head>
    <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="style.css">
    <title>Emuārs</title>
</head>
<body>
    <h1>Emuārs</h1>

    <form>
        <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>' />
        <button>Meklēt</button>
    </form>

    <ul>

<ul>
<?php foreach($posts as $post) { ?>
    <li> <?= $post["content"] ?>
<?php   } ?>
</ul>
</body>
</html>
