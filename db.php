<?php
// Mysql Info
$config = array(
	'host' => 'localhost:3306',
	'username' => 'delilah',
	'password' => '123',
	'database' => 'favorite_singer'
);

// 连接
function connect($config){
	$conn = mysql_connect($config['host'],$config['username'],$config['password']);
	if ( !$conn ) die('Could not connect.' . mysql_error());
	mysql_select_db($config['database']);
	mysql_query('set names UTF8;');
	return $conn;
}

// 获取数据
function get($tableName, $offset = 0, $size = 10){
	$query = "SELECT * FROM `{$tableName}` LIMIT {$offset},{$size}";
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());

	$data = array();
	$len = mysql_num_rows ( $result );
	for ($i=0; $i < $len; $i++) {
		$data[$i] = mysql_fetch_assoc($result);
	}

	return $data;
}
// 获取长度
function get_total($tableName){
	$query = "SELECT COUNT(*) FROM `{$tableName}`";
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	$row = mysql_fetch_array($result);
	return ($row ? $row[0] : 0);
}


?>