<?php

namespace PhpPlatform\Persistence\Expression;

class Expression {
	
	const OP_LIKE      = "LIKE";
	const OP_EQUAL     = "=";
	const OP_NOT_EQUAL = "!=";
	const OP_LT        = "<";
	const OP_GT        = ">";
	const OP_LTE       = "<=";
	const OP_GTE       = ">=";
	const OP_BETWEEN   = "BETWEEN";
	const OP_IN        = "IN";
	const OP_OR        = "OR";
	const OP_AND       = "AND";
	
	private $operator = null;
	private $oprands = null;
	
	function __construct($oparands,$operator = null){
		//validate $oparands
		if(is_array($oparands)){
			foreach ($oparands as $oparand){
				$this->validateOperands($oparand);
			}
		}elseif ($this->validateOperands($oparands)){
			
		}
	}
	
	private function validateOperands($oparand){
		if(is_numeric($oparand) || is_string($oparand) || is_bool($oparand) || $oparand instanceof Expression){
				
		}elseif(is_null($oparand)){
			
		}
	}
	
	
}