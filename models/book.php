<?php
	class Book {
		public $id;
		public $title;
		public $author;
		public $isRead;
		public $note;

		public function __construct($id, $title, $author, $isRead, $note) {
			$this->id = $id;
			$this->title = $title;
			$this->author = $author;
			$this->isRead = $isRead;
			$this->note = $note;
		}

		public static function all() {
			$list = [];
			$db = Db::getInstance();
			$req = $db->query('SELECT * FROM books');

			foreach ($req->fetchAll() as $book) {
				$list[] = new Book($book['id'], $book['title'], $book['author'], $book['isRead'], $book['note']);
			}

			return $list;
		}
	}
?>