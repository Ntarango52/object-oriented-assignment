<?php

namespace Ntarango52\objectOrientedAssignment;

require_once("autoload.php");
require_once(dirname(__DIR__) . "/vendor/autoload.php");

use InvalidArgumentException\RangeException\Exception\TypeError;
use Ramsey\Uuid\Uuid;
/**
 * Classes for the author table
 *
 * This is the code for the classes and methods for the author table.
 *
 * @author Nohemi Tarango <ntarango3@cnm.edu>
 **/
class Author {
	use ValidateUuid;
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
	} catch(TypeError $exception) {
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
	public function setAuthorId( $newAuthorId) : void {
		try {
			$uuid = self::validateUuid($newAuthorId);
		} catch(TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		// convert and store the tweet id
		$this->authorId = $uuid;
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
		$this->authorAvatarUrl = $newAuthorAvatarUrl;
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
	 * inserts this Tweet into mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function insert(PDO $pdo) : void {

		// create query template
		$query = "INSERT INTO author(authorId, authorActivationToken, authorAvatarUrl, authorEmail, authorHash, authorUsername)
					VALUES(:authorId, :authorActivationToken, :authorAvatarUrl, :authorEmail, :authorHash, :authorUsername)";
		$statement = $pdo->prepare($query);

		// bind the member variables to the place holders in the template
		$parameters = ["authorId" => $this->authorId, "authorActivationToken" => $this->authorActivationToken, "authorAvatarUrl" => $this->authorAvatarUrl, "authorEmail" => $this->authorEmail,
			"authorHash" => $this->authorHash, "authorUsername" => $this->authorUsername];
		$statement->execute($parameters);
	}

	/**
	 * updates this Tweet in mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function update(\PDO $pdo) : void {

		// create query template
		$query = "UPDATE author SET authorId = :authorId, authorActivationToken = :authorActivationToken, authorAvatarUrl = :authorAvatarUrl, authorEmail = :authorEmail, authorHash = :authorHash, authorUsername = :authorUsername
						WHERE authorId = :authorId";
		$statement = $pdo->prepare($query);

		$parameters = ["authorId" => $this->authorId,"authorActivationToken" => $this->authorActivationToken, "authorAvatarUrl" => $this->authorAvatarUrl, "authorEmail" => $this->authorEmail, "authorHash" => $this->authorHash, "authorUsername" => $this->authorUsername];
		$statement->execute($parameters);
	}


		/**
		 * deletes this Tweet from mySQL
		 *
		 * @param \PDO $pdo PDO connection object
		 * @throws \PDOException when mySQL related errors occur
		 * @throws \TypeError if $pdo is not a PDO connection object
		 **/
	public function delete(\PDO $pdo) : void {

		// create query template
		$query = "DELETE FROM author WHERE authorId = :authorId";
		$statement = $pdo->prepare($query);

		// bind the member variables to the place holder in the template
		$parameters = ["authorId" => $this->authorId];
		$statement->execute($parameters);
	}

	/**
	 * gets the author by authorId
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param Uuid|string $authorId author id to search for
	 * @return author|null author found or null if not found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when a variable are not the correct data type
	 **/
	public static function getAuthorByAuthorId(\PDO $pdo, $authorId) : ?author {
		// sanitize the authorId before searching
		try {
			$authorId = self::validateUuid($authorId);
		} catch(InvalidArgumentException\RangeException\Exception\TypeError $exception) {
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}

		// create query template
		$query = "SELECT authorId, authorActivationToken, authorAvatarUrl, authorEmail, authorHash, authorUsername 
						FROM author WHERE authorId = :authorId";
		$statement = $pdo->prepare($query);

		// bind the author id to the place holder in the template
		$parameters = ["authorId" => $authorId->getBytes()];
		$statement->execute($parameters);

		// grab the author from mySQL
		try {
			$author = null;
			$statement->setFetchMode(\PDO::FETCH_ASSOC);
			$row = $statement->fetch();
			if($row !== false) {
				$author = new Author($row["authorId"], $row["authorActivationToken"], $row["authorAvatarUrl"],
					$row["authorEmail"], $row["authorHash"], $row["authorUsername"]);
			}
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
		return($author);
	}

	/**
	 * gets all authors
	 *
	 * @param \PDO $pdo PDO connection object
	 * @return \SplFixedArray SplFixedArray of authors found or null if not found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getAllAuthors(\PDO $pdo) : \SPLFixedArray {
		// create query template
		$query = "SELECT authorId, authorActivationToken, authorAvatarUrl, authorEmail, authorHash, authorUsername FROM author";
		$statement = $pdo->prepare($query);
		$statement->execute();

		// build an array of tweets
		$authors = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$author = new Author($row["authorId"], $row["authorActivationToken"], $row["authorAvatarUrl"], $row["authorEmail"], $row["authorHash"], $row["authorUsername"]);
				$authors[$authors->key()] = $author;
				$authors->next();
			} catch(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($authors);
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
