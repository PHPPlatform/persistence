<?php

namespace PhpPlatform\Tests\Persistence;


use PhpPlatform\Persistence\Model;

class TestModel   {
	
	function testFindStaticClassName(){
		echo "\n";
		echo SampleModel::find();
		echo "\n";
		echo SampleModel2::find();
		echo "\n";
		echo SampleModel3::find();
		echo "\n";
		echo SampleModel2::find2();
		
	}
	
	
	
	
}

class SampleModel extends Model{
	
	static function find($condition = null, $lazy = false){
		echo '('.__CLASS__.')';
		return parent::find();
	}
	
}

class SampleModel2 extends SampleModel{
	static function find($condition = null, $lazy = false){
		echo '('.__CLASS__.')';
		return parent::find();
	}
	
	static function find2(){
		return SampleModel::find();
	}
	
}

class SampleModel3 {
	static function find($condition = null, $lazy = false){
		echo '('.__CLASS__.')';
		return SampleModel::find();
	}
}
