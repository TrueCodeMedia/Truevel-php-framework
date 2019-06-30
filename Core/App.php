<?php
namespace Core;
class App {
	protected static $registry = [];

	public static function bind($key, $value) {
		static::$registry[$key] = $value;
	}

	public static function resolve($key) {
		if (!array_key_exists($key, static::$registry)) {
			throw new Exception("{$key} is not binded in the service container.");
		}
		return static::$registry[$key];
	}
}