<?php
	
	function call($controller, $action) {
		require_once('controllers/' . $controller . '_controller.php');

		switch($controller) {
			case 'pages':
				$controller = new PagesController();
				break;
			case 'books':
				require_once('models/book.php');
				$controller = new BookController();
				break;
		}

		$controller->{ $action }();
	}

	$controllers = array('pages' => ['home', 'error', 'list'],
						 'books' => ['index', 'show', 'add', 'edit', 'delete']
						);

	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else {
			call('pages', 'error');
		}
	} else {
		call('pages', 'error');
	}

?>