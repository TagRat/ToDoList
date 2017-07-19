<?php
require_once('model/database.php');

// Get all To do lists 
$query = 'SELECT DISTINCT id_name FROM todo
              ORDER BY id_name';
$statement = $db->prepare($query);
$statement->execute();
$names = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>To Do List</title>
    <link rel="stylesheet" type="text/css" href="view/main.css" />
</head>

<!-- the body section -->
<body>
<header> <h1>To Do List</h1></header>
<main>
<aside>
        <!-- display a list of todo lists -->
        <h2>Active To Do</h2>
        <nav>
        <ul>
            <?php foreach ($names as $name) : ?>
            <li>
            <?php echo $name['id_name']; ?>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>          
    </aside>
 
</main>

</body>
</html>