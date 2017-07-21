<?php include 'header.php'; ?>
<main>
    <H1>New Todo List</H1>

    <form action="model/create_new.php" method="post">
        <div id="data">
          <Label>List Name: </Label>
          <input type="text" name="name"><br>
          <label>Task 1</label>
          <input type="text" name="task1"><br>
          <label>Task 2</label>
          <input type="text" name="task2"><br>
          <label>Task 3</label>
          <input type="text" name="task3"><br>
          <label>Task 4</label>
          <input type="text" name="task4"><br>
          <label>Task 5</label>
          <input type="text" name="task5"><br>
        </div>  
        <div id="button">
        	<label>&nbsp</label>
        	<input type="submit" name="Done">
       	</div>
    </form>   	
</main>

       















