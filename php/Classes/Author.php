<?php

namespace Ntarango52\objectOrientedAssignment;

require_once("autoload.php");
require_once(dirname(__DIR__) . "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;
/**
 * Classes for the author table
 *
 * This is the code for the classes and methods for the author table.
 *
 * @author Nohemi Tarango <ntarango3@cnm.edu>
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
	 * constructor for this profile
	 *
	 * @param uuid $newAuthorId new author id
	 * @param string $newAuthorActivationToken new author activation token id
	 * @param string $newAuthorAvatarUrl new author avatar url
	 * @param string $newAuthorEmail new author email
	 * @param string $newAuthorHash new author hash
	 * @param string $newAuthorUsername new author username
	 * @throws UnexpectedValueException if any of the parameters are invalid
	 **/
	public function __construct($newAuthorId, $newAuthorActivationToken, $newAuthorAvatarUrl, $newAuthorEmail, $newAuthorHash, $newAuthorUsername) {
		try {
			$this->setAuthorId($newAuthorId);
			$this->setAuthorActivationToken($newAuthorActivationToken);
			$this->setAuthorAvatarUrl($newAuthorAvatarUrl);
			$this->setAuthorEmail($newAuthorEmail);
			$this->setAuthorHash($newAuthorHash);
			$this->setAuthorUsername($newAuthorUsername);

			//determine what exception type was thrown
	} catch(\InvalidArgumentException\RangeException\Exception\TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
}

	/**
	 * accessor method for author id
	 *
	 * @return uuid value of author id
	 **/
	public function getAuthorId() {
		return ($this->authorId);
	}

	/**
	 * mutator method for author id
	 *
	 * @param uuid $newAuthorId new value of author id
	 * @throws UnexpectedValueException if $newAuthorId is not an integar
	 **/
	public function setAuthorId($newAuthorId) {
		// verify the author id is valid
		$newAuthorId = filter_var($newAuthorId, FILTER_VALIDATE_UUID);
		if($newAuthorId === false) {
			throw(new UnexpectedValueException("author id is not a valid integar"));
		}

		// convert and store the author id
		$this->authorId = intval($newAuthorId);
	}

	/**
	 * accessor method for author activation token
	 *
	 * @return string value of author activation token
	 **/
	public function getAuthorActivationToken() {
		return ($this->authorActivationToken);
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
	 * accessor method for author avatar url
	 *
	 * @return string value of author avatar url
	 **/
	public function getAuthorAvatarUrl() {
		return ($this->authorAvatarUrl);
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
	 * accessor method for author email
	 *
	 * @return string value of author email
	 **/
	public function getAuthorEmail() {
		return ($this->authorEmail);
	}

	/**
	 * mutator method for the author email
	 *
	 * @param string $newAuthorEmail new value of email
	 * @throws UnexpectedValueException if $newAuthorEmail is not valid
	 **/
	public function setAuthorEmail($newAuthorEmail) {
		//verify the author email is valid
		$newAuthorEmail = filter_var($newAuthorEmail, FILTER_SANITIZE_EMAIL);
		if($newAuthorEmail === false) {
			throw(new UnexpectedValueException("author email is not a valid string"));
		}

		// store the author email
		$this->authorEmail = $newAuthorEmail;
	}

	/**
	 * accessor method for author hash
	 *
	 * @return string value of author hash
	 **/
	public function getAuthorHash() {
		return ($this->authorHash);
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
	 * accessor method for author username
	 *
	 * @return string value of author username
	 **/
	public function getAuthorUsername() {
		return ($this->authorUsername);
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

	/**
	 * toString() magic method
	 *
	 * @return string HTML formatted author
	 **/
	public function __toString() {
		// create an HTML formatted author
		$html = "<p>Author id: "            . $this->authorId . "<br />"
				. "Author activation token: " . $this->authorActivationToken . "<br />"
				. "Author avatar url: "       . $this->authorAvatarUrl       . "<br />"
				. "Author email: "            . $this->authorEmail           . "<br />"
				. "Author hash: "             . $this->authorHash            . "<br />"
				. "Author username: "         . $this->authorUsername        . "<br />"
				. "</p>";
		return($html);
	}
}
?>
