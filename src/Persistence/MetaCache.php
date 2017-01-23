<?php

namespace PhpPlatform\Persistence;

use PhpPlatform\JSONCache\Cache;

class MetaCache extends Cache{
	
	private static $cacheObj = null;
	protected $cacheFileName = "metacache26i63Ahud56"; // cache file to save details
	
	public static function getInstance(){
		if(self::$cacheObj == null){
			self::$cacheObj = new MetaCache();
		}
		return self::$cacheObj;
	}
	
	public function getData($className,$propertyName){
		
	}
	
	
}