<?php
  class BooksController {
    public function index() {
      $books = Book::all();
      require_once('views/books/index.php');
    }

    public function show() {
      if (!isset($_GET['id']))
        return call('pages', 'error');

      $book = Book::find($_GET['id']);
      require_once('views/books/show.php');
    }

    public function delete() {
      if (!isset($_GET['id']))
        return call('pages', 'error');

      $book = Book::delete($_GET['id']);
      require_once('views/books/delete.php');
    }

    public function edit() {
      if (!isset($_GET['id'] ))
        return call('pages', 'error');

      $book = Book::find($_GET['id']);
      require_once('views/books/edit.php');
    }

    public function editComment() {
      if (!isset($_GET['id'] ))
        return call('pages', 'error');

      $book = Book::find($_GET['id']);
      require_once('views/books/editComment.php');
    }

    public function add() {
      require_once('views/books/add.php');
    }
    
  }
?>