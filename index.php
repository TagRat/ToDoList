<?php
 require_once('model/database.php');

// Creates a list of todos but title 
$query = 'SELECT DISTINCT listName FROM todo
              ORDER BY listName';
$statement = $db->prepare($query);
$statement->execute();
$names = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html>


<head>
    <title>To Do List</title>
<link rel="stylesheet" type="text/css" href="view/main.css" />  

</head>

<body>

<div id="container">

<div id="header">
    <header><h2>To Do List Manager Test 2</h2></header>
</div>
 
 <div id="navbar"><br>
    <form action="view/create_new_form.php">
    <input type="submit" value="New ToDo">
    </form>

<!-- display a list of todo lists -->
    <h3>Current To Do</h3>
     <ul>
       <?php foreach ($names as $name) : ?>
       <li>
         <?php echo $name['listName']; ?>
       </li>
       <?php endforeach; ?>
       </ul>

 </div>      

<div id="content">

<h3>Holder only</h3>


</div>

<div id="footer">       
    
    <h5>Footer</h5>   
      
</div>
</div>

     
</body>
</html>