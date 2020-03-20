<?php
require_once (dirname(__DIR__, 1)."/classes/Author.php");
$author = new \ntarango3\objectOrientedAssignment\author(authorId, authorActivationToken, authorAvatarUrl, authorEmail, authorHash, authorUsername);
var_dump($author);

class foo {

	public static function bar() {

		$authorId = "00dd0b60-0e00-4d7a-83d0-5c8252e67d0b";
		$authorActivationToken = "";
		$authorAvatarUrl = "";
		$authorEmail = "";
		$authorHash = "";
		$authorUsername = "";
		echo "$authorEmail $authorActivationToken $authorHash";
		$author = new author(authorId, authorActivationToken, authorAvatarUrl, authorEmail, authorHash, authorUsername);
		echo var_dump($authorUsername);
		echo getAuthorUsername();

		echo 'I work!';
	}
}
