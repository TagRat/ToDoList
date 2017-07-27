<?php
function list_todo() {
    global $db;
   $query = 'SELECT id_name FROM todo
   $statement = $db->prepare($query);
   $statement->execute();
   $category = $statement->fetch();
   $category_name = $category['categoryName'];
   return $category_name;
   return $statement;    
}

//function get_category_name($category_id) {
//   global $db;
//    $query = 'SELECT * FROM categories
//              WHERE categoryID = :category_id';    
//    $statement = $db->prepare($query);
//    $statement->bindValue(':category_id', $category_id);
//    $statement->execute();    
//    $category = $statement->fetch();
//    $statement->closeCursor();    
//    $category_name = $category['categoryName'];
//    return $category_name;
//}

//function add_category($name) {
//    global $db;
//    $query = 'INSERT INTO categories (categoryName)
//              VALUES (:name)';
//    $statement = $db->prepare($query);
//    $statement->bindValue(':name', $name);
//    $statement->execute();
//    $statement->closeCursor();    
//}

//function delete_category($category_id) {
//    global $db;
//    $query = 'DELETE FROM categories
//              WHERE categoryID = :category_id';
//    $statement = $db->prepare($query);
//    $statement->bindValue(':category_id', $category_id);
//    $statement->execute();
//    $statement->closeCursor();
//}
?>