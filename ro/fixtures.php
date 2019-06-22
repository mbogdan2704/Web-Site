<?php
require_once 'idiorm.php';
ORM::configure('sqlite:/Applications/MAMP/htdocs/tema/database');

ORM::get_db()->exec('DROP TABLE IF EXISTS news;');
ORM::get_db()->exec(
    'CREATE TABLE news (' .
        'id INTEGER PRIMARY KEY AUTOINCREMENT, ' .
        'name TEXT, ' .
		'parola TEXT, ' .
		'desc TEXT, ' .
        'count INTEGER)'
);
 
function create_news($name, $parola, $author, $views) {
    $news = ORM::for_table('news')->create();
    $news->name = $name;
	$news->parola = $parola;
	$news->desc = $author;
	$news->count = $views;
    $news->save();
    return $news;
}
 
$news_list = array(
    create_news("bogdan", 
	"bogdan1",
	"Baiat de Baiat",
	2090),
	
	create_news("ionut",
	"mihai",
	"Nuuu",
	748)
);
 
echo('ok<br>');
echo('news ' . ORM::for_table('news')->count() . '<br>');

function get_all_news() {
	//TODO 
}
