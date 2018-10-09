<?php 

function getSubmitedInternationalJournal(){

	try{
		$pdo = new PDO('sqlite:model/Publications.sqlite3');
	}catch(Exception $e) {
		echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    	die('Erreur : '.$e->getMessage());
	}

	$req = $pdo->query('SELECT * FROM SubmittedInternationalJournal ORDER BY ID DESC'); // The querries should be recent to old

	if ($req==False){
		die(var_export($pdo->errorinfo(), TRUE));
	}

	return $req;
}

function getInternationalJournal(){

	try{
		$pdo = new PDO('sqlite:model/Publications.sqlite3');
	}catch(Exception $e) {
		echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    	die('Erreur : '.$e->getMessage());
	}

	$req = $pdo->query('SELECT * FROM InternationalJournal ORDER BY ID DESC'); // The querries should be recent to old

	if ($req==False){
		die(var_export($pdo->errorinfo(), TRUE));
	}

	return $req;
}

function getInternationalConference(){

	try{
		$pdo = new PDO('sqlite:model/Publications.sqlite3');
	}catch(Exception $e) {
		echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    	die('Erreur : '.$e->getMessage());
	}

	$req = $pdo->query('SELECT * FROM InternationalConference ORDER BY ID DESC'); // The querries should be recent to old

	if ($req==False){
		die(var_export($pdo->errorinfo(), TRUE));
	}

	return $req;
}

function getNationalConference(){

	try{
		$pdo = new PDO('sqlite:model/Publications.sqlite3');
	}catch(Exception $e) {
		echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    	die('Erreur : '.$e->getMessage());
	}

	$req = $pdo->query('SELECT * FROM NationalConference ORDER BY ID DESC'); // The querries should be recent to old

	if ($req==False){
		die(var_export($pdo->errorinfo(), TRUE));
	}
	
	return $req;
}
