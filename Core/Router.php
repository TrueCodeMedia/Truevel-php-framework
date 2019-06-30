<?php
namespace Core;
class Router {
	protected $routes = [
		'GET' => [],
		'POST' => [],
	];

	public static function load($filename) {
		$router = new static;
		require $filename;
		return $router;
	}
	// public function define($routes) {
	// 	$this->routes = $routes;
	// }
	public function get($uri, $controller) {
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller) {
		$this->routes['POST'][$uri] = $controller;
	}
	public function direct($uri, $requestType) {
		if (array_key_exists($uri, $this->routes[$requestType])) {
			return $this->callAction(
				...explode('@', $this->routes[$requestType][$uri])
			);
			// return $this->routes[$requestType][$uri];
		}
		throw new Exeption('No route defined for this URI');
	}
	public function callAction($controller, $action) {
		$controller = "App\\Controllers\\{$controller}";
		$controller = new $controller;
		if (!method_exists($controller, $action)) {
			throw new Exception("{$controller} does not have {$method} method.");
		}
		return (new $controller)->$action();

	}
}