# ToDoList
Final Project IS601 - William Taggart (WT49)
Summer 2017 IS 601450


Overview

A simple todo list application written in PHP and mysql demonstrating a Model-View-Controller pattern.  

Requirements 

1.  The user should be able to go to a home page and create a new list by clicking on a html link or button.  The user should be able to create a title for the todo list.

2.  The home page should list previously created todo lists and allow the user to click on the todo list to display the todo items.  Users should be able to edit the title of the todo list and delete the todo list from this screen.

3. Users should be able to edit the title of the todo list and delete the todo list from this screen.

4. The todo list should have a "Add Todo" button to add todo items using a form.

5. The todo list each todo item with an indicator to show task completion and links to edit and delete the task.

6. There should be an edit button next to each item that allows the user to edit the item and mark the task complete.

7. There should be a delete button next to each item that allows the user to delete the item.

8. When the user edits or deletes an item, the user should be redirected to the todo list they were viewing, so that the user can see that the item was edited or deleted successfully.

Database layout 

DB name - WT49 
Table name - TODO
Columns 
	NAME   - To Do list Name, type=txt, length=20
	ENTRY  - To Do list Item, type=txt, length=60
	STATUS - To Do list Status, type=txt, Default=Null, three valid entires - inprogress, pending, complete


