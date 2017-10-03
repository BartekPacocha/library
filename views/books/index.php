<h1>List of books:</h1>

<table class="table">
	<tr>
		<th>Tytuł</th>
		<th>Autor</th>
		<th>Przeczytane</th>
		<th>Notatki</th>
	</tr>
	<?php foreach($books as $book) { ?>
	<tr>
		<td>
			<a href='?controller=books&action=show&id=<?php echo $book->id; ?>'>
				<?php echo $book->title; ?>
			</a>
		</td>
		<td><?php echo $book->author; ?></td>
		<td>
			<?php

				$x = $book->isRead;
				if ($x != 0) {
					echo "Przeczytane";
				} else {
					echo "Nieprzeczytane";
				}
			?>
		</td>
		<td><?php echo $book->note; ?></td>
		<td><a href='?controller=books&action=editComment&id=<?php echo $book->id; ?>'>Edit</a></td>
		<td><a href='?controller=books&action=delete&id=<?php echo $book->id; ?>'>Delete</a></td>
	</tr>
	<?php } ?>
</table>
