<?php
  function connect()
  {
    $connid = mysql_pconnect('localhost', 'root', '');
	if(!$connid) die('CONNECTION ERROR');
	mysql_select_db('quanda') or die('DATABASE ERROR');
	return $connid;
  }
