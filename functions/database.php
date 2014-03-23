<?php
  function connect()
  {
    $connid = mysql_pconnect('localhost', 'root', '');
	if(!$connid) die('CONNECTION ERROR');
	mysql_select_db('quanda') or die('DATABASE ERROR');
	
	mysql_query ('SET NAMES UTF8;');
	mysql_query ('SET COLLATION_CONNECTION=utf8_general_ci;');
	mysql_client_encoding($connid);
	
	return $connid;
  }
