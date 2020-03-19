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
		return ($this->authorId);
	}

	/**
	 * mutator method for author id
	 *
	 * @param int $newAuthorId new value of author id
	 * @throws UnexpectedValueException if $newAuthorId is not an integar
	 **/
	public function setAuthorId($newAuthorId) {
		// verify the author id is valid
		$newAuthorId = filter_var($newAuthorId, FILTER_VALIDATE_INT);
		if($newAuthorId === false) {
			throw(new UnexpectedValueException("author id is not a valid integar"));
		}

		// convert and store the author id
		$this->authorId = intval($newAuthorId);
	}

	/**
	 * mutator method for author activation token
	 *
	 * @param string $newAuthorActivationToken new value of the author activation token
	 * @throws UnexpectedValueException if $newAuthorActivationToken is not valid
	 **/
	public function setAuthorActivationToken($newAuthorActivationToken) {
		// verify the author activation token is valid
		$newAuthorActivationToken = filter_var($newAuthorActivationToken, FILTER_SANITIZE_STRING);
		if($newAuthorActivationToken === false) {
			throw(new UnexpectedValueException("author activation token is not a valid string"));
		}

		// store the author activation token
		$this->authorActivationToken = $newAuthorActivationToken;
	}

	/**
	 * mutator method for author avatar url
	 *
	 * @param string $newAuthorAvatarUrl
	 * @throws UnexpectedValueException if $newAuthorAvatarUrl is not valid
	 **/
	public function setAuthorAvatarUrl($newAuthorAvatarUrl) {
		//verify the author avatar url is valid
		$newAuthorAvatarUrl = filter_var($newAuthorAvatarUrl, FILTER_SANITIZE_STRING);
		if($newAuthorAvatarUrl === false) {
			throw(new UnexpectedValueException("author avatar url is not a valid string"));
		}

// store the author avatar url
		$this->authorAvararUrl = $newAuthorAvatarUrl;
}


/**
 * mutator method for the author email
 *
 * @param string $newAuthorEmail new value of email
 * @throws UnexpectedValueException if $newAuthorEmail is not valid
 **/
	public function setAuthorEmail($newAuthorEmail) {
		//verify the author email is valid
		$newAuthorEmail = filter_var($newAuthorEmail, FILTER_SANITIZE_STRING);
		if($newAuthorEmail === false) {
			throw(new UnexpectedValueException("author email is not a valid string"));
		}

		// store the author email
		$this->authorEmail = $newAuthorEmail;
}


/**
 * mutator method for the author hash
 *
 * @param string $newAuthorHash new value of hash
 * @throws UnexpectedValueException if $newAuthorHash is not valid
 **/
	public function setAuthorHash($newAuthorHash) {
		//verify the author hash is valid
		$newAuthorHash = filter_var($newAuthorHash, FILTER_SANITIZE_STRING);
		if($newAuthorHash === false) {
			throw(new UnexpectedValueException("author hash is not a valid string"));
		}

		// store the author hash
		$this->authorHash = $newAuthorHash;
	}


/**
 * mutator method for the author username
 *
 * @param string $newAuthorUsername new value of username
 * @throws UnexpectedValueException if $newAuthorUsername is not valid
 **/
	public function setAuthorUsername($newAuthorUsername) {
		//verify the author username is valid
		$newAuthorUsername = filter_var($newAuthorUsername, FILTER_SANITIZE_STRING);
		if($newAuthorUsername === false) {
			throw(new UnexpectedValueException("author username is not a valid string"));
		}

		// store the author username
		$this->authorUsername = $newAuthorUsername;
	}
}
?>
