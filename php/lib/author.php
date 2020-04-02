<?php
require_once (dirname(__DIR__, 1)."/Classes/Author.php");
require_once("/etc/apache2/capstone-mysql/Secrets.php");
$secrets =  new Secrets("/etc/apache2/capstone-mysql/cohort28/ntarango3.ini");
$pdo = $secrets->getPdoObject();

	function bar() {

		$authorId = "2daf089d-e481-4207-869c-f8053ee99b55";
		$authorActivationToken = "the token here";
		$authorAvatarUrl = "the url here";
		$authorEmail = "the email here";
		$authorHash = "the hash here";
		$authorUsername = "the username here";
		echo "$authorEmail $authorActivationToken $authorHash";
		$author = new \Ntarango52\objectOrientedAssignment\Author($authorId, $authorActivationToken, $authorAvatarUrl, $authorEmail, $authorHash, $authorUsername);
		var_dump($author);
	}
	bar();
