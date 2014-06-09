<?php
/**
 * Connection properties
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class ConnectionProperty{
//	private static $host = 'localhost';
//	private static $user = 'udbsmart';
//	private static $password = 'udbsmart';
//	private static $database = 'dbsmart';

	private static $host = '103.28.36.174:3306';
	private static $user = 'usmart';
	private static $password = 'usmart';
	private static $database = 'nhlam1pn_dbsmart';

	public static function getHost(){
		return ConnectionProperty::$host;
	}

	public static function getUser(){
		return ConnectionProperty::$user;
	}

	public static function getPassword(){
		return ConnectionProperty::$password;
	}

	public static function getDatabase(){
		return ConnectionProperty::$database;
	}
}
?>