<?php
namespace App\Controllers;
use Core\App;

class PostController {
	public function index() {
		$posts = App::resolve('database')->selectAll('posts');
		return view('create', compact('posts'));
	}

	public function store() {
		App::resolve('database')->insert('posts', [
			'title' => $_POST['title'],
			'description' => $_POST['description'],
		]);

		return redirect('posts');
	}
}