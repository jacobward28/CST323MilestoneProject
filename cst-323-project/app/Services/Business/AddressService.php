<?php

namespace App\Services\Business;

use App\Services\Utility\Connection;
use App\Services\Data\AddressDAO;
use App\Models\AddressModel;

class AddressService{
    
    //Takes in a user's ID and returns the address associated with that ID
    public function findByUserID(int $userID){
        
        
        $connection = new Connection();
        
        $DAO = new AddressDAO($connection);
        
        $result = $DAO->findByUserID($userID);
        
        $connection = null;
        
        
        return $result;
    }
    
    //Takes in an address model and updates the corresponding database entries information
    public function editAddress(AddressModel $address){
        
        
        $connection = new Connection();
        
        $DAO = new AddressDAO($connection);
        
        $result = $DAO->editAddress($address);
        
        $connection = null;
        
        
        return $result;
    }
    
    //Takes in a user's ID and creates a new address in the database using that ID as the foreign key
    public function createAddress(int $userID, $connection){
        
        
        $DAO = new AddressDAO($connection);
        
        $result = $DAO->createAddress($userID);
        
        $connection = null;
        
        
        return $result;
    }
}