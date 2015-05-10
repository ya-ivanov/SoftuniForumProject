<?php

class User {

    private $id;

    private $username;

    private $email;

    private $firstName;

    private $lastName;

    private $password;

    private $salt;

    private $isAdmin;

    private $avatar;

    function __construct($userData = null) {

        if(isset($userData['id'])){
            $this->id = $userData['id'];
        }
        if(isset($userData['username'])){
            $this->username =  htmlentities($userData['username']);
        }
        if(isset($userData['password'])){
            $this->password = $userData['password'];
        }
        if(isset($userData['email'])){
            $this->email =  htmlentities($userData['email']);
        }
        if(isset($userData['firstName'])){
            $this->firstName =  htmlentities($userData['firstName']);
        }
        if(isset($userData['lastName'])){
            $this->lastName =  htmlentities($userData['lastName']);
        }
        if(isset($userData['salt'])){
            $this->salt = $userData['salt'];
        }
        if(isset($userData['is_admin'])){
            $this->isAdmin = $userData['is_admin'];
        }
        if(isset($userData['avatar'])){
            $this->avatar = $userData['avatar'];
        }
    }

    /**
     * @param string email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param int id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    public function generateNewSalt(){
        $this->salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }

    /**
     * @return boolean
     */
    public function isAdmin()
    {
        return $this->isAdmin;
    }


    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

}