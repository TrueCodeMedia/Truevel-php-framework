<?php
use Core\App;
App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(Connection::make(App::resolve('config')['database'])));

function view($viewName, $data = []) {
	extract($data);
	return require "app/Views/{$viewName}.view.php";
}

function redirect($path) {
	header("Location:/{$path}");
}
