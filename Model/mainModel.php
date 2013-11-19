<?php
/**
 * **************************** Creation Log *******************************
 * File Name                   -  Users.php
 * Project Name                -  AssignSeat
 * Description                 -  Model Class file for User
 * @Version                   -  1.0
 * Created by                  -  Chetan Sharma
 * Created on                  -  August 03, 2013
 * ***************************** Update Log ********************************
 * Sr.NO.		Version		Updated by           Updated on          Description
 * -------------------------------------------------------------------------
 *
 * *************************************************************************
 */

require_once getcwd().'/Model/model.php';
class mainModel extends model
{

    /**
     *
     * @var String Store the password in md5 format
     */
    private $_password;

    /**
     *
     * @var Integer User ID from Database
     */
    private $_id;

    /**
     *
     * @var String Store the username
     */
    private $_username;

    /**
     * return $password
     */
    private function getPassword ()
    {
        return $this->_password;
    }

    /**
     *
     * @param String $password            
     */
    private function setPassword ($password)
    {
        $this->_password = $password;
    }

    /**
     * return $username
     */
    private function getUsername ()
    {
        return $this->_username;
    }

    /**
     *
     * @param String $username            
     */
    private function setUsername ($username)
    {
        $this->_username = $username;
    }

    /**
     *
     * @param Int $userid            
     */
    private function setUserId ($id)
    {
        $this->_id = $id;
    }

    /**
     * return $userid
     */
    private function getUserId ()
    {
        return $this->_id;
    }

    /**
     * Called from login method when user credentials in the system
     * have been checked
     *
     * Usage: Sets userid and username of user in session
     * for further usage
     */
    private function setSession ()
    {
        $_SESSION["username"] = $this->getUsername();
        $_SESSION["userid"] = $this->getUserId();
        $_SESSION['isAdmin'] = "1";
    }

    /**
     *
     * @param
     *            Email id of user trying to log in: $fieldEmail
     * @param
     *            Password of user trying to log in: $fieldPassword
     *            Called by: initiateLogin in MainController
     * @return number 1 if entry exists by calling exists function
     * Usage: Checks for valid login information
     */
    public function login ($fieldUsername, $fieldPassword)
    {
        $this->setPassword($fieldPassword);
        $this->setUsername($fieldUsername);
        
        if ($this->exists($this->encryptPassword($this->getPassword()), $this->getUsername()) == 1) {
            $this->setSession();
            return 1;
        } else {
            $_SESSION['msg'] = "";
            $_SESSION['msg'] = $_SESSION['msg'] . '<br>' . "Login Failed username or password does not exist";
            header("Location:index.php");
            die();
        }
    }

    /**
     *
     * @param $email entered
     *            by user
     * @param $password entered
     *            by use after encryption
     * @return 1 if user exists in system, 0 if doesn't
     * Usage: Checks for user exists or not in system
     */
    private function exists ($password, $username)
    {
        if ($this->fetchUser($username, $password) == true) {
            return 1;
        } else {
            return 0;
        }
    }

    

    /**
     * Called from within login($fieldEmail, $fieldPassword)
     * 
     * @param $password Received
     *            from user logging in
     * @return encrypted password
     * Usage: Converts the password to encrypted one
     */
    private function encryptPassword ($password)
    {
        return md5($password);
    }
    
	public function saveContactUs($name,$email,$phone,$text)
	{
		$this->db->Fields (array("name"=>$name));
		$this->db->From ( "contactus");
		//$this->db->Where (array("name" => $this->getUser ()));
		$this->db->Insert();
		echo $this->db->lastQuery();
		$result = $this->db->resultArray();
		return $result;
	}
}
