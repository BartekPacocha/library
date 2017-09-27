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
		<td><?php echo $book->title; ?></td>
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
	</tr>
	<?php } ?>
</table>
