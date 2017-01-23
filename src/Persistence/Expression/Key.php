<?php

namespace PhpPlatform\Persistence\Expression;

use PhpPlatform\Persistence\Model;
use PhpPlatform\Errors\Exceptions\Persistence\BadQueryException;

class Key {
	private $object = null;
	private $propertyName = null;
	
	function __construct($object,$propertyName){
		if(!($object instanceof Model)){
			throw new BadQueryException('Parameter 1 should be an instance of PhpPlatform\Persistence\Model');
		}
		$this->object = $object;
		$this->propertyName = $propertyName;
	}
	
	function getMeta($metaProperty){
		
	}
	
}