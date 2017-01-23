<?php

namespace PhpPlatform\Persistence;

abstract class Model implements Constants{
	
	const FILLSTATUS_EMPTY = 'EMPTY';
	const FILLSTATUS_ID    = 'ID';
	const FILLSTATUS_FULL  = 'FULL';
	
	private $__status = self::FILLSTATUS_EMPTY;
	
	function __construct(){
		
	}
	
	/**
	 * creates Model instance and returns it
	 * 
	 * @return Model
	 */
	function create(){
		
	}
	
	/**
	 * searches the models from persistence ,based on the condition given
	 * 
	 * @param unknown $condition
	 * @param boolean $lazy
	 * 
	 * @return Model[]
	 */
	static function find($condition = null, $lazy = false){
		return get_called_class();
	}
	
	/**
	 * deletes this model
	 */
	function delete(){
		
	}
}