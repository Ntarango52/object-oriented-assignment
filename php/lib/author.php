<?php
require_once (dirname(__DIR__, 1)."/classes/Author.php");
$author = new \ntarango3\objectOrientedAssignment\Author($authorId, $authorActivationToken, $authorAvatarUrl, $authorEmail, $authorHash, $authorUsername);
var_dump($author);

function bar() {

	public function bar() {

		$authorId = "the UUID here";
		$authorActivationToken = "the token here";
		$authorAvatarUrl = "the url here";
		$authorEmail = "the email here";
		$authorHash = "the hash here";
		$authorUsername = "the username here";
		echo "$authorEmail $authorActivationToken $authorHash";
		$author = new Author($authorId, $authorActivationToken, $authorAvatarUrl, $authorEmail, $authorHash, $authorUsername);
		var_dump($authorUsername);
	}
	bar();
}
