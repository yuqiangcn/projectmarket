<?php 
/*
data base class
*/

abstract class db {
	//connect the data base
	/*
	parms $h
	parms $u
	parms $p
	return bool
	*/
	public abstract function connect($n, $u, $p);

	public abstract function query($sql);
	

	// query several row
	public abstract function getAll($sql);

	// query single row
	public abstract function getRow($sql);

	// query one
	public abstract function getOne($sql);

	// inset/update auto automatic
	public abstract function autoExecute($table, $data, $act='insert', $where=' ');

	// autoExecute('user', array('username' => 'zhansan', 'email'=>'zhang@163.com'), 'insert');
}



?>