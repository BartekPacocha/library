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

		public static function add($title,$author, $isRead, $note) {
			try{
				$db = Db::getInstance();
				$req = $db->prepare('
					INSERT INTO books (title, author, isRead, note)
					VALUES (:title, :author, :isRead, :note)
					');
				$req->execute([
					'title' => $title,
					'author' => $author,
					'isRead' => $isRead,
					'note' => $note
				]);
			} catch(PDOException $e) {
				echo 'Query failed: ' . $e->getMessage();
			} 
		}
	}
?>