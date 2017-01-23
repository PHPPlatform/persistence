<?php

namespace PhpPlatform\Tests\Persistence;

class TestNumberOfFileReads {
    
	private $tempDir = null;
	private $noOfFiles = 100000;
	
	function setUp(){
		// create files
		$data = array(
			"key1"=>"v1",
			"key2"=>array(
				"key21"=>"v21",
				"key22"=>22	
			)	
		);
		
		$jsonData = json_encode($data);
		$this->tempDir = sys_get_temp_dir()."/ygwqkuwegwebuy".rand(1,100);
		mkdir($this->tempDir);
		
		for($i=0;$i<$this->noOfFiles;$i++){
			file_put_contents($this->tempDir.'/gyejie'.$i, $jsonData);
		}
		echo "setUp".PHP_EOL;
		
	}
	
    function testPerformance(){
        $start = microtime(true);
        
        for($i=0;$i<$this->noOfFiles;$i++){
        	$fileContent = file_get_contents($this->tempDir.'/gyejie'.$i);
        	$content = json_decode($fileContent,true);
        }
        
        $end = microtime(true);
        
        echo PHP_EOL." TIME : ".($end - $start).PHP_EOL;
    }
    
    function tearDown(){

    	for($i=0;$i<$this->noOfFiles;$i++){
    		unlink($this->tempDir.'/gyejie'.$i);
    	}
    	
    	rmdir($this->tempDir);
    	echo "tearDown".PHP_EOL;
    }
    
    
}
