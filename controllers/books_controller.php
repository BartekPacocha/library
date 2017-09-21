<?php
	class BookController {
		public function index() {
			$books = Book::all();
			require_once('views/users/index.php');
		}
	}

?>