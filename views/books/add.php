<form action="" method="post">
	<label>Tytuł: </label><input type="text" name="title"><br>
	<label>Autor: </label><input type="text" name="author"><br>
	<label>Przeczytane: <select name="isRead" >
		<option value="1">TAK</option>
		<option value="0">NIE</option>
	</select><br>
	<label>Notatka: </label><input type="text" name="note"><br>
	<input type="submit" name="add" value="add"><br>
</form>

<?php
	if (isset($_POST['add'])) {
		Book::add($_POST['title'], $_POST['author'], $_POST['isRead'], $_POST['note']);
		header('Location: ?controller=books&action=index');
	}
?>