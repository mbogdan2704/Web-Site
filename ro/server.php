<?php
require_once 'idiorm.php';
ORM::configure('sqlite:/Applications/MAMP/htdocs/tema/database');
$req = $_REQUEST["id"];

if($req == "get_all_data") {	
	$data = ORM::for_table('news')->find_many();
	$response = "";
	foreach($data as $article) {		
		$response .= $article->name . '%';
		$response .= $article->parola . '%';
		$response .= $article->desc . '%';
		$response .= $article->count . '%';
		$response .= '+';

	}
	echo $response;
}


