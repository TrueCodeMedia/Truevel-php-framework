<?php
namespace App\Controllers;

use Core\App;

class PagesController {
	public function home() {
		$posts = App::resolve('database')->selectAll('posts');

		return view('index');
	}

	public function about() {
		die('about');
		return view('about');
	}
	public function contact() {
		return view('contact');
	}
}