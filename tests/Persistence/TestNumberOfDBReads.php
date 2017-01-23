<?php

namespace PhpPlatform\Tests\Persistence;

class TestNumberOfDBReads extends \PHPUnit_Framework_TestCase {

	private $db = null;
	private $noOfRecords = 1000;

	function setUp(){
		// create files
		
		$this->db = new \mysqli('localhost','root','root','testdbreads','3306');
		
		for($i=0;$i<$this->noOfRecords;$i++){
			$this->db->query("INSERT INTO mytable (key1, key2, key21, key22) VALUES ('abcd', 'bnhbvgsd', 'nhbvh', '$i') ");
		}
		echo "setUp".PHP_EOL;

	}

	function testPerformance(){
		$start = microtime(true);
		
		$result = $this->db->query('select * from mytable');
		$row = $result->fetch_assoc();
		while($row != null){
			$content = $row;
			$row = $result->fetch_assoc();
		}

		$end = microtime(true);

		echo PHP_EOL." TIME : ".($end - $start).PHP_EOL;
	}

	function tearDown(){
		$this->db->query('TRUNCATE mytable');
		
		$this->db->close();
		
		echo "tearDown".PHP_EOL;
	}


}
