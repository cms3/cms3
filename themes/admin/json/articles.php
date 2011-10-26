<?php 
$json[] = array(	
	'status' => -1,	
	'id' => 2,
	'date' => "2011-10-00",
	'title' => "Question",
	'text' => "I dont andestend. What are you mean? when say? that bew is dead?",
	'post' => 1,
	'blog' => 5,
	'user' => 0,
	'publish' => true,
	'ordering' => 2
);

$json[] = array(	
	'status' => -1,
	'id' => 1,
	'date' => "2011-10-54",
	'title' => "Question",
	'text' => "I dont andestend. What are you mean? when say? that bew is dead?",
	'post' => 1,
	'blog' => 5,
	'user' => 0,
	'publish' => true,
	'ordering' => 1
);

$json[] = array(	
	'status' => 0,
	'id' => 3,
	'date' => "2012-10-54",
	'title' => "Question",
	'text' => "I dont andestend. What are you mean? when say? that bew is dead?",
	'post' => 1,
	'blog' => 5,
	'user' => 0,
	'publish' => true,
	'ordering' => 3
);

echo (json_encode($json));