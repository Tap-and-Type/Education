<?php
require_once "config.php";
require_once "database.php";

function insertSugg($name, $email, $suggestions)
{
	$sql = "insert into gSuggestion (name, email, suggestions) values ('$name', '$email', '$suggestions')";
	$result = dbQuery($sql);
	return $result;
	
}

function insertSuggestLink($name, $email, $course, $courseLink, $suggestions)
{
	$sql = "insert into suggestLink (name, email, crs_name, link_name, suggestions) values ('$name', '$email', '$course', '$courseLink', '$suggestions')";
	$result = dbQuery($sql);
	return $result;
	
}


function insertReportLink($name, $email, $course, $courseLink, $suggestions)
{
	$sql = "insert into reportLink (name, email, crs_name, link_name, suggestions) values ('$name', '$email', '$course', '$courseLink', '$suggestions')";
	$result = dbQuery($sql);
	return $result;
	
}

?>