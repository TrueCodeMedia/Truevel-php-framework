<?php

class Connection {
	public static function make($config) {
		try {
			return new Pdo(
				$config['connection'] . '; dbname=' . $config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		} catch (PDOExeption $e) {
			die($e->getMessage());
		}
	}
}