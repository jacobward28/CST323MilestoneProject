<?php


namespace App\Services\Business;

use App\Services\Utility\Connection;
use App\Services\Data\UserInfoDAO;
use App\Models\UserInfoModel;

class UserInfoService{
    
    //Attempts to find the userInfo associated with the passed user ID
    public function findByUserID(int $userID){
        
        
        //Creates connection to the database
        $connection = new Connection();
        
        //Creates an instance of the data access object
        $DAO = new UserInfoDAO($connection);
        
        //Stores the results of the associated data access object function
        $result = $DAO->findByUserID($userID);
        
        //Closes the connection to the database
        $connection = null;
        
        
        //Returns the result from the data access object
        return $result;
    }
    
    //Takes a userInfoModel object as an argument and attempts to update the corresponding database entry
    public function editUserInfo(UserInfoModel $userInfo){
        

        //Creates connection to the database
        $connection = new Connection();
        
        //Creates an instance of the data access object
        $DAO = new UserInfoDAO($connection);
        
        //Stores the results of the associated data access object function
        $result = $DAO->editUserInfo($userInfo);
        
        //Closes the connection to the database
        $connection = null;
        
        
        //Returns the result from the data access object
        return $result;
    }
    
    //Creates a new userInfo entry in the database with a foreign key corresponding to the ID passed as an argumnet
    public function createUserInfo(int $userID, $connection){
        
        
        //Creates an instance of the data access object
        $DAO = new UserInfoDAO($connection);
        
        //Stores the results of the associated data access object function
        $result = $DAO->createNewUserInfo($userID);
        
        //Closes the connection to the database
        $connection = null;
        

        
        //Returns the result from the data access object
        return $result;
    }
}