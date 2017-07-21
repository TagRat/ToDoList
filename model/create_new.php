<?php
// Get the input from create_new.php
$name = filter_input(INPUT_POST, 'name');
$task = filter_input(INPUT_POST, 'task');

// Validate inputs
if ($name == null) {
    $error = "Invalid List Name.";
    include('../index.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO todo
                 (listName, taskName)
              VALUES
                 (:name, :task)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':task', $task);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('../index.php');
}
?>
















