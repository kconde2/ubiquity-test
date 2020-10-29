<?php
return array(
		"siteUrl"=>"http://127.0.0.1/firstProject/",
		"database"=>[
				"type"=>"mysql",
				"dbName"=>"Ubiquity",
				"serverName"=>"127.0.0.1",
				"port"=>"3306",
				"user"=>"root",
				"password"=>"root",
				"options"=>[],
				"cache"=>false
		],
		"sessionName"=>"firstProject",
		"namespaces"=>[],
		"templateEngine"=>'Ubiquity\\views\\engine\\Twig',
		"templateEngineOptions"=>array("cache"=>false),
		"test"=>false,
		"debug"=>false,
		"logger"=>function(){return new \Ubiquity\log\libraries\UMonolog("firstProject",\Monolog\Logger::INFO);},
		"di"=>["@exec"=>["jquery"=>function($controller){
						return \Ubiquity\core\Framework::diSemantic($controller);
					}]],
		"cache"=>["directory"=>"cache/","system"=>"Ubiquity\\cache\\system\\ArrayCache","params"=>[]],
		"mvcNS"=>["models"=>"models","controllers"=>"controllers","rest"=>""],
		"isRest"=>function(){
			return \Ubiquity\utils\http\URequest::getUrlParts()[0]==="rest";
		}
);