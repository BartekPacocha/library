


<form action="" method="post">
	<label>Przeczytane: 
	<select name="isRead" >
		<option value="1">TAK</option>
		<option value="0">NIE</option>
	</select><br>

	<label>Notatka: </label><input type="text" name="note" value='<?php echo $book->note; ?>'><br>

	<input type="submit" name="editComment" value="Edit"><br>
</form>

<?php
	$id = $_GET['id'];

	if (isset($_POST['editComment'])) {
		Book::editComment($id, $_POST['isRead'], $_POST['note']);
		header('Location: ?controller=books&action=index');
	}
?>