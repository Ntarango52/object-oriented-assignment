<?php
/**
 *(one line desc of the class)
 *
 * (more detailed desc of what the class does)
 *
 * @author Nohemi Tarango <>
 **/
class Author {
	/**
	 * id for this author; this is the primary key
	 **/
	private $authorId;
	/**
	 * activation token for the author; the activation token contains information that is used to identify you and associates you with a device
	 **/
	private $authorActivationToken;
	/**
	 * the avatar url for the author; the small image that identifies the author
	 **/
	private $authorAvatarUrl;
	/**
	 * the email of the author; where the author can be contacted
	 **/
	private $authorEmail;
	/**
	 * the hash of the author; hash codes retrieve data from hash based collections
	 **/
	private $authorHash;
	/**
	 * the username of the author; the name registered with the website
	 **/
	private $authorUsername;
	/**
	 * accessor method for author id
	 *
	 * @return int value of author id
	 **/
	public function getAuthorId() {
		return($this->authorId);
	}

	/**
	 * mutator method for author id
	 *
	 * @param int $newAuthorId new value of author id
	 * @throws UnexpectedValueException if $newAuthorId is not an integar
	 **/
	public function setAuthorId($newAuthorId) {
		// verify the author id is valid
		$newAuthorId = filter_var ($newAuthorId, FILTER_VALIDATE_INT);
		if($newAuthorId === false) {
			throw(new UnexpectedValueException("author id is not a valid integar"));
		}

		// convert and store the author id
		$this->authorId = intval($newAuthorId);
	}
}
?>